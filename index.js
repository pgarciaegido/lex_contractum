@import "node_modules/imagesloaded/imagesloaded.pkgd.min.js";
@import "node_modules/masonry-layout/masonry.js";

var $arrow = document.getElementById('arrow');
var $menu = document.getElementById('Mobile');
var $body = document.getElementById('body');
var $darkbg = document.getElementById('darkbg');
var $close = document.getElementById('Mobile-close');
var $buscar = document.getElementById('buscar');
var $buscarMob = document.getElementById('buscarIcon');
var $barraSuperior = document.getElementById('barra-superior');


jQuery(document).ready(function(){

	function showMenu(){
		$menu.classList.add('active-menu');
		$body.classList.add('overflow');
		$darkbg.classList.add('active');
	}

	function removeMenu(){
		$menu.classList.remove('active-menu');
		$body.classList.remove('overflow');
		$darkbg.classList.remove('active');
	}

	function search(e){
		if(e.keyCode === 13){
			event.preventDefault(e);
			var result = $buscar.value;
			var link = 'http://lexcontractus.es/?s='+ result;
			location.href= link;
		}
	}
	
	function searchMobile(){
		if(window.innerWidth < 500){
			$buscar.style.cssText = 'display:' + 'inline' + '; width:' + '80%;';
		}
	}

	// STICKY FOOTER
	function stickyFooter(){
		var element = document.getElementById('container');
		var height = element.offsetHeight;
		if (height < screen.height -300){
		  document.getElementById("footer-bg").classList.add('stikybottom');
		}
		else{
			document.getElementById("footer-bg").style.cssText = 'position:' + 'relative;';
		}
	}

	//STICKY HEADER

	function stickyHeader(){
		if(jQuery(this).scrollTop() > 100 && window.innerWidth < 500){
			$barraSuperior.classList.add("sticky");
			$barraSuperior.style.cssText = 'top' + '100px';
		}
		else{
			$barraSuperior.classList.remove("sticky");
		}
	}

	//MASONRY ** ESPECIAL LAYOUT LIBRARY. 
	//IMAGESLOADED IS A LIBRARY THAT MAKES MASONRY WORK AFTER ALL IMGS ARE LOADED
	jQuery('.Feed').imagesLoaded(function () {
		jQuery('.Feed').masonry({
		  // options
		  itemSelector: '.Feed-wrapper',
		  columnWidth: '.Feed-wrapper'
		});
	});

	// jQuery(window).scroll(stickyHeader);
	jQuery(window).bind('load', stickyFooter);
	$arrow.addEventListener('touchstart', showMenu);
	$darkbg.addEventListener('touchstart', removeMenu);
	$close.addEventListener('touchstart',removeMenu);
	$buscar.addEventListener('keydown', search);
	$buscarMob.addEventListener('touchstart', searchMobile);
})
	