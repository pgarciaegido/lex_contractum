var v = require('./vars')

module.exports = {
  footer: stickyFooter
}

// If the screen content height is shorter than the total viewport height, sticky footer
function stickyFooter(){
  var element = document.getElementById('container');
  var height = element.offsetHeight;
  if (height < screen.height -400){
    document.getElementById("footer-bg").classList.add('stikybottom');
  }
}
