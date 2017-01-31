var v = require('./vars')

module.exports = {
  showMenu    : showMenu,
  removeMenu  : removeMenu,
  search      : search,
  searchMobile: searchMobile,
  readingBar  : readingBar
}

// Opens the menu
function showMenu(){
  v.$menu.classList.add('active-menu');
  v.$body.classList.add('overflow');
  v.$darkbg.classList.add('active');
}

// closes the menu
function removeMenu(){
  v.$menu.classList.remove('active-menu');
  v.$body.classList.remove('overflow');
  v.$darkbg.classList.remove('active');
}


// Opens the search bar
function search(e){
  if(e.keyCode === 13){
    event.preventDefault(e);
    var result = v.$buscar.value;
    var link = 'http://lexcontractus.es/?s='+ result;
    location.href= link;
  }
}

// Opens the search bar on mobile
var opened = false;
function searchMobile(){
  if(window.innerWidth < 891 && opened === false){
    v.$buscar.style.cssText = 'display:block; position: absolute; width:50%; top:55px; right:20px;';
    opened = true;
  } else if(window.innerWidth < 891 && opened === true){
    v.$buscar.style.cssText = 'display:none;';
    opened = false;
  }
}

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
