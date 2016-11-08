var $arrow = document.getElementById('arrow');
var $menu = document.getElementById('Mobile');
var $body = document.getElementById('body');
var $darkbg = document.getElementById('darkbg');
var $close = document.getElementById('Mobile-close');
var $buscar = document.getElementById('buscar');

	
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
		event.preventDefault();
		var result = $buscar.value;
		var link = '?s='+ result;
		location.href=link;
	}
}

$arrow.addEventListener('touchstart', showMenu);
$darkbg.addEventListener('touchstart', removeMenu);
$close.addEventListener('touchstart',removeMenu);
$buscar.addEventListener('keydown', search);