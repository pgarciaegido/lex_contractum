var v = require('./vars')

module.exports = {
  footer: stickyFooter,
  header: stickyHeader
}

// If the screen content height is shorter than the total viewport height, sticky footer
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

//STICKY HEADER
function stickyHeader(){
  if(jQuery(this).scrollTop() > 100 && window.innerWidth < 500){
    v.$barraSuperior.classList.add("sticky");
    v.$barraSuperior.style.cssText = 'top' + '100px';
  }
  else{
    v.$barraSuperior.classList.remove("sticky");
  }
}
