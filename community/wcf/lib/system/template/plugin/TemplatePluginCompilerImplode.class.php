<?php
// wcf imports
if (!defined('NO_IMPORTS')) {
	require_once(WCF_DIR.'lib/system/template/TemplatePluginFunction.class.php');
}

/**
 * The 'implode' compiler function joins array elements with a string.
 * 
 * Usage:
 * {implode from=$array key=bar item=foo glue=";"}{$foo}{/implode}
 *
 * @author 	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.template.plugin
 * @category 	Community Framework
 */
class TemplatePluginCompilerImplode implements TemplatePluginCompiler {
	protected $tagStack = array();
	
	/**
	 * @see TemplatePluginCompiler::executeStart()
	 */
	public function executeStart($tagArgs, TemplateScriptingCompiler $compiler) {
		$compiler->pushTag('implode');
		
		if (!isset($tagArgs['from'])) {
			throw new SystemException($compiler->formatSyntaxError("missing 'from' argument in implode tag", $compiler->getCurrentIdentifier(), $compiler->getCurrentLineNo()), 12001);
		}
		if (!isset($tagArgs['item'])) {
			throw new SystemException($compiler->formatSyntaxError("missing 'item' argument in implode tag", $compiler->getCurrentIdentifier(), $compiler->getCurrentLineNo()), 12001);
		}
		
		$hash = StringUtil::getRandomID();
		$glue = isset($tagArgs['glue']) ? $tagArgs['glue'] : "', '";
		$this->tagStack[] = array('hash' => $hash, 'glue' => $glue);
		
		$phpCode = "<?php\n";
		$phpCode .= "\$_length".$hash." = count(".$tagArgs['from'].");\n";
		$phpCode .= "\$_i".$hash." = 0;\n";
		$phpCode .= "foreach (".$tagArgs['from']." as ".(isset($tagArgs['key']) ? (StringUtil::substring($tagArgs['key'], 0, 1) != '$' ? "\$this->v[".$tagArgs['key']."]" : $tagArgs['key'])." => " : '').(StringUtil::substring($tagArgs['item'], 0, 1) != '$' ? "\$this->v[".$tagArgs['item']."]" : $tagArgs['item']).") { ?>";
		return $phpCode;
	}
	
	/**
	 * @see TemplatePluginCompiler::executeEnd()
	 */
	public function executeEnd(TemplateScriptingCompiler $compiler) {
		$compiler->popTag('implode');
		$tagArgs = array_pop($this->tagStack);
		
		$phpCode = "<?php\n";
		$phpCode .= "if (++\$_i".$tagArgs['hash']." < \$_length".$tagArgs['hash'].") { echo ".$tagArgs['glue']."; }\n";
		$phpCode .= "} ?>";
		
		return $phpCode;
	}
}
?>