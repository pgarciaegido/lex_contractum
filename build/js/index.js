var $arrow=document.getElementById("arrow"),$menu=document.getElementById("Mobile"),$body=document.getElementById("body"),$darkbg=document.getElementById("darkbg"),$close=document.getElementById("Mobile-close"),$buscar=document.getElementById("buscar"),$buscarMob=document.getElementById("buscarIcon"),$barraSuperior=document.getElementById("barra-superior");jQuery(document).ready(function(){function e(){$menu.classList.add("active-menu"),$body.classList.add("overflow"),$darkbg.classList.add("active")}function t(){$menu.classList.remove("active-menu"),$body.classList.remove("overflow"),$darkbg.classList.remove("active")}function n(e){if(13===e.keyCode){event.preventDefault(e);var t=$buscar.value,n="http://lexcontractus.es/?s="+t;location.href=n}}function o(){window.innerWidth<500&&($buscar.style.cssText="display:inline; width:80%;")}function c(){function e(){var e=window.innerHeight;t-=e;var n=window.pageYOffset/t*100;document.getElementById("reading-bar").style.width=n+"%"}var t,n=document.body,o=document.documentElement;t="undefined"!=typeof document.height?document.height:Math.max(n.scrollHeight,n.offsetHeight,o.clientHeight,o.scrollHeight,o.offsetHeight),e()}function a(){var e=document.getElementById("container"),t=e.offsetHeight;t<screen.height-300?document.getElementById("footer-bg").classList.add("stikybottom"):document.getElementById("footer-bg").style.cssText="position:relative;"}function r(){for(var e=0;e<s.length;e++)document.URL==s[e]&&jQuery("#menu-header").find("a").eq(e).css("color","#690000")}function d(){for(var e=0;e<i.length;e++)document.URL.indexOf(i[e])!=-1&&jQuery("#menu-header").find("a").eq(e).css("color","#690000")}jQuery(".Feed").imagesLoaded(function(){jQuery(".Feed").masonry({itemSelector:".Feed-wrapper",columnWidth:".Feed-wrapper"})});var s=["http://lexcontractus.es/","http://lexcontractus.es/category/mercantil/","http://lexcontractus.es/category/fiscal-internacional/","http://lexcontractus.es/category/propiedad-industrial-e-intelectual/","http://lexcontractus.es/quienes-somos/","http://lexcontractus.es/contacta/"],i=[null,"http://lexcontractus.es/mercantil/","http://lexcontractus.es/fiscal-internacional/","http://lexcontractus.es/propiedad-industrial-e-intelectual"];r(),d(),jQuery(window).bind("load",a),$arrow.addEventListener("touchstart",e),$darkbg.addEventListener("touchstart",t),$close.addEventListener("touchstart",t),$buscar.addEventListener("keydown",n),$buscarMob.addEventListener("touchstart",o),document.addEventListener("scroll",c)});