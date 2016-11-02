var $arrow = document.getElementById('arrow');
var $menu = document.getElementById('Mobile');
var $body = document.getElementById('body');
var $darkbg = document.getElementById('darkbg');
var $close = document.getElementById('Mobile-close');


	
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
$close.addEventListener('touchstart',removeMenu);

///Twitter

window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));

var $twit = document.getElementById('tweet-container');

$twit.innerHTML = "";
twttr.widgets.createShareButton(
"https:\/\/codepen.io\/pegido\/full\/rrWNRd",
document.getElementById("tweet-container"),
{
  size: "large",
  text: 'hola',
  hashtags: "Quotes"
});

