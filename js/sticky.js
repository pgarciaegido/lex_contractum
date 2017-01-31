var v = require('./vars')

module.exports = {
  footer: stickyFooter
}

// If the screen content height is shorter than the total viewport height, sticky footer
function stickyFooter(){
  var $container = document.getElementById('container');
  var $footer = document.getElementById('footer-bg');
  //este dato es la suma de la altura de ambos elementos, y se usa solo en DESKTOP.
  var menuAndBarra = 139;
  var containerHeight = $container.offsetHeight;
  var footerHeight = $footer.offsetHeight;
  var screenHeight = window.innerHeight;
  var total = footerHeight + containerHeight;
  if (total < screenHeight){
    var margin = window.innerWidth < 891 ? screenHeight - total : screenHeight - (total + menuAndBarra);
    $container.style.cssText = 'margin-bottom:' + margin + 'px;';
  }
}
