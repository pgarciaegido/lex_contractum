var $ = require('../../../../wp-includes/js/jquery/jquery.js')

module.exports = {
  navColor   : navColor,
  navColorArt: navColorArt
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
      $('#menu-header').find('a').eq(i).css('color','#690000');
  }
}

// Gets where we are (within the article) and colores the menu
function navColorArt () {
  for(var i = 0, len = routesArt.length; i < len; i++){
    if (document.URL.indexOf(routesArt[i]) != -1)
      $('#menu-header').find('a').eq(i).css('color','#690000');
  }
}
