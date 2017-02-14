var v = require('./vars')

module.exports = {
  showMenu    : showMenu,
  removeMenu  : removeMenu,
  search      : search,
  openSearch  : openSearch,
  closeSearch : closeSearch,
  oCSearch    : oCSearch,
  readingBar  : readingBar
}

// Opens the menu
function showMenu(){
  var top = window.pageYOffset + 100
  var topSmall = window.pageYOffset + 70
  if (window.innerWidth < 400){
    v.$menu.style.cssText = 'display:block; transition: all .3s cubic-bezier(0.76, 0, 0.3, 1); top:' + topSmall + 'px;';
  } else {
    v.$menu.style.cssText = 'display:block; transition: all .3s cubic-bezier(0.76, 0, 0.3, 1); top:' + top + 'px;';
  }
  v.$body.classList.add('overflow');
  v.$darkbg.classList.add('active');
}

// closes the menu
function removeMenu(e){
  e.preventDefault(e);
  v.$menu.style.cssText = 'top: -9999px;';
  v.$body.classList.remove('overflow');
  v.$darkbg.classList.remove('active');
}


// Searchs
function search(e){
  if(e.keyCode === 13){
    event.preventDefault(e);
    var result = v.$buscar.value;
    var link = 'http://lexcontractus.es/?s='+ result;
    location.href= link;
  }
}

// Open and close search

var opened = false;
function openSearch(e){
  event.preventDefault(e);
  v.$buscarDiv.classList.add('buscar_opened');
  v.$buscarPushdown.style.cssText = 'padding-top: 50px;';
  opened = true;
}

function closeSearch(e){
  event.preventDefault(e);
  v.$buscarDiv.classList.remove('buscar_opened');
  v.$buscarPushdown.style.cssText = 'padding-top: 0;';
  opened = false;
}

function oCSearch(e){
  opened === false ? openSearch(e) : closeSearch(e);
}
// / Open and close search

// Progress bar. Increases on scroll
function readingBar () {
  var B = document.body,
      H = document.documentElement,
      height

  if (typeof document.height !== 'undefined') {
      height = document.height // For webkit browsers
  } else {
      height = Math.max( B.scrollHeight, B.offsetHeight,H.clientHeight, H.scrollHeight, H.offsetHeight );
  }

  function scrollBar () {
    var rbar = document.getElementById('reading-bar')
    if (rbar !== null){
      var windowHeight = window.innerHeight;
      height = height - windowHeight;
      var percentage = (window.pageYOffset / height * 100);
      rbar.style.width = percentage + '%';
    }
  }

  scrollBar()
}
