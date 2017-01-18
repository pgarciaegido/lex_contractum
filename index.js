var jQuery        = require('../../../wp-includes/js/jquery/jquery.js')
var v             = require('./js/vars')
var header        = require('./js/header')
var nav           = require('./js/navbar')
var sticky        = require('./js/sticky')
var jQueryBridget = require('jquery-bridget');
var ImagesLoaded  = require('imagesloaded')
var Masonry       = require('masonry-layout')

jQuery(document).ready(function(){

	jQueryBridget( 'masonry', Masonry, jQuery );
	jQueryBridget( 'imagesLoaded', ImagesLoaded, jQuery );

	//MASONRY ** ESPECIAL LAYOUT LIBRARY.
	//IMAGESLOADED IS A LIBRARY THAT MAKES MASONRY WORK AFTER ALL IMGS ARE LOADED
	jQuery('.Feed').imagesLoaded(function () {
		jQuery('.Feed').masonry({
		  // options
		  itemSelector: '.Feed-wrapper',
		  columnWidth: '.Feed-wrapper'
		});
	});

	nav.navColor();
	nav.navColorArt();

	// jQuery(window).scroll(stickyHeader);
	jQuery(window).bind('load', sticky.footer);
	v.$arrow.addEventListener('touchstart', header.showMenu);
	v.$darkbg.addEventListener('touchstart', header.removeMenu);
	v.$close.addEventListener('touchstart', header.removeMenu);
	v.$buscar.addEventListener('keydown', header.search);
	v.$buscarMob.addEventListener('touchstart', header.searchMobile);
	document.addEventListener('scroll', header.readingBar);
})
