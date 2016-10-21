var $arrow = document.getElementById('logo');
var $menu = document.getElementById('Mobile');
var $body = document.getElementById('body');
var $darkbg = document.getElementById('darkbg');




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

$arrow.addEventListener('touchstart', showMenu);
$darkbg.addEventListener('touchstart', removeMenu);
// cambiar este por el icono de la X
// $arrow.addEventListener('touchstart',removeMenu);