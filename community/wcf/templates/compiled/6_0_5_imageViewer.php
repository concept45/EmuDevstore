<?php
/**
* WoltLab Community Framework
* Template: imageViewer
* Compiled at: Tue, 13 Aug 2013 11:30:43 +0000
* 
* DO NOT EDIT THIS FILE
*/
$this->v['tpl']['template'] = 'imageViewer';
?>
<script type="text/javascript" src="<?php echo RELATIVE_WCF_DIR; ?>js/ImageViewer.class.js"></script>
<script type="text/javascript">
	//<![CDATA[			
	// when the window is fully loaded, add image viewer
	Event.observe(window, 'load', function() {
		new ImageViewer($$('.enlargable'), {
			langCaption		: 'this.links.length > 1 ? "Bild " + (this.currentIndex + 1) + " von " + this.links.length + (this.currentLink.title ? (" - " + this.currentLink.title) : "") : (this.currentLink.title ? this.currentLink.title : "")',
			langPrevious		: 'Vorheriges Bild',
			langNext		: 'Nächstes Bild',
			langPlay		: 'Diashow starten (Bildwechsel alle 5 Sekunden)',
			langPause		: 'Diashow stoppen',
			langEnlarge		: 'Nur dieses Bild anzeigen (beendet die Bildbetrachtung)',
			langClose		: 'Schließen',
			imgBlankSrc		: '<?php echo RELATIVE_WCF_DIR; ?>images/imageViewer/blank.png',
			imgMenuSrc		: '<?php echo RELATIVE_WCF_DIR; ?>images/imageViewer/menu.png',
			imgPlaySrc		: '<?php ob_start(); ?>imageViewer/playM.png<?php $_iconaa4d8555782bf30edaee5617436d49fd16b9d502 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconaa4d8555782bf30edaee5617436d49fd16b9d502); ?>',
			imgPreviousSrc		: '<?php ob_start(); ?>imageViewer/previousM.png<?php $_icon6bb10a03e03103a10fb6f53ab4e124e5d3d565f4 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon6bb10a03e03103a10fb6f53ab4e124e5d3d565f4); ?>',
			imgNextSrc		: '<?php ob_start(); ?>imageViewer/nextM.png<?php $_iconc3e60e58e0be58b0ece5ac72b2e491f76fb7590e = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconc3e60e58e0be58b0ece5ac72b2e491f76fb7590e); ?>',
			imgEnlargeSrc		: '<?php ob_start(); ?>imageViewer/enlargeM.png<?php $_icon4ce12cba96f659052f5fb13dc4c4a95911938b7e = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon4ce12cba96f659052f5fb13dc4c4a95911938b7e); ?>',
			imgPauseSrc		: '<?php ob_start(); ?>imageViewer/pauseM.png<?php $_iconc6d34c18e46b39e520fffad327a8639a50e47652 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_iconc6d34c18e46b39e520fffad327a8639a50e47652); ?>',
			imgCloseSrc		: '<?php ob_start(); ?>imageViewer/closeM.png<?php $_icond60c9b5df3faf2c33ab1549b7bd37acd527f57c4 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icond60c9b5df3faf2c33ab1549b7bd37acd527f57c4); ?>',
			imgPlayHoverSrc		: '<?php ob_start(); ?>imageViewer/playHoverM.png<?php $_icon6856d7c42758e31535d0ee364adf83894f68537f = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon6856d7c42758e31535d0ee364adf83894f68537f); ?>',
			imgPreviousHoverSrc	: '<?php ob_start(); ?>imageViewer/previousHoverM.png<?php $_icona557c51f4ba12f9ce5dda73110065b949bd26a7e = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icona557c51f4ba12f9ce5dda73110065b949bd26a7e); ?>',
			imgNextHoverSrc		: '<?php ob_start(); ?>imageViewer/nextHoverM.png<?php $_icon72112afab6b821fddc3f24ad374de18a594b9d45 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon72112afab6b821fddc3f24ad374de18a594b9d45); ?>',
			imgEnlargeHoverSrc	: '<?php ob_start(); ?>imageViewer/enlargeHoverM.png<?php $_icon7ec83c5b2807c494bf32ef7255581770088b5f82 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon7ec83c5b2807c494bf32ef7255581770088b5f82); ?>',
			imgPauseHoverSrc	: '<?php ob_start(); ?>imageViewer/pauseHoverM.png<?php $_icona50a659e7e994be73c359e68f48b2ee2ea8a7b61 = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icona50a659e7e994be73c359e68f48b2ee2ea8a7b61); ?>',
			imgCloseHoverSrc	: '<?php ob_start(); ?>imageViewer/closeHoverM.png<?php $_icon51f8460f4aeb2cf9263494efcbaf58759327f1ae = ob_get_contents(); ob_end_clean(); echo StyleManager::getStyle()->getIconPath($_icon51f8460f4aeb2cf9263494efcbaf58759327f1ae); ?>'	
		});
	});
//]]>
</script>