var $arrow = document.getElementById('arrow');
var $menu = document.getElementById('Mobile');
var $body = document.getElementById('body');
var $darkbg = document.getElementById('darkbg');
var $close = document.getElementById('Mobile-close');
var $buscar = document.getElementById('buscar');
var $buscarMob = document.getElementById('buscarIcon');
	
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
		var link = '?s='+ result;
		location.href=link;
	}
}

function searchMobile(){
	$buscar.style.cssText = 'display:' + 'inline' + '; width:' + '80%;';
}

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

$arrow.addEventListener('touchstart', showMenu);
$darkbg.addEventListener('touchstart', removeMenu);
$close.addEventListener('touchstart',removeMenu);
$buscar.addEventListener('keydown', search);
$buscarMob.addEventListener('touchstart', searchMobile);

document.addEventListener("DOMContentLoaded", stickyFooter, false);