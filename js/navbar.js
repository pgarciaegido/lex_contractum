var $ = require('../../../../wp-includes/js/jquery/jquery.js');

module.exports = {
  navColor   : navColor,
  navColorArt: navColorArt,
  linkInTag: linkInTag
}

var routes = ["http://lexcontractus.es/",
              "http://lexcontractus.es/category/mercantil/",
              "http://lexcontractus.es/category/fiscal-internacional/",
              "http://lexcontractus.es/category/propiedad-industrial-e-intelectual/",
              "http://lexcontractus.es/quienes-somos/",
              "http://lexcontractus.es/contacta/"];

var routesArt = [null,
                 "http://lexcontractus.es/mercantil/",
                 "http://lexcontractus.es/fiscal-internacional/",
                 "http://lexcontractus.es/propiedad-industrial-e-intelectual"]

// Gets where we are located and colors the menu
function navColor () {
  for(var i = 0, len = routes.length; i < len; i++){
    if (document.URL == routes[i])
      $('#color-menu').find('a').eq(i).css('color','#690000');
  }
}

// Gets where we are (within the article) and colores the menu
function navColorArt () {
  for(var i = 0, len = routesArt.length; i < len; i++){
    if (document.URL.indexOf(routesArt[i]) != -1)
      $('#color-menu').find('a').eq(i).css('color','#690000');
  }
}

// Implements link into article section tags
function linkInTag () {
  if(document.URL.split('/').length > 4) {
    var $tag = $('.Etiqueta-name').find('a');
    if ($tag.html() == 'MERCANTIL')
      $tag.attr('href', routes[1]);
    else if ($tag.html() == 'FISCAL INTERNACIONAL')
      $tag.attr('href', routes[2]);
  }
}
