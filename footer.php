</div> <!--container-->
<div id="footer-bg">
	<div class="container">
	<footer class="Footer">
	<div class="Footer-derecha">	
		<img class="Footer-logo" src="<?php bloginfo('template_url'); ?>/images/logo-blanco.svg" alt="LexContractus">
		<p class="Footer-copy">Lex Contractus | 2016</p>
	</div>
		<nav class="Footer-menu">
			<ul class="Footer-menu-list">
				<a href="lexcontractus.es"><li class="Footer-menu-item">HOME</li></a>
				<a href="http://lexcontractus.es/category/mercantil/"><li class="Footer-menu-item">MERCANTIL INTERNACIONAL</li></a>
				<a href="http://lexcontractus.es/category/fiscal-internacional/"><li class="Footer-menu-item">FISCAL INTERNACIONAL</li></a>
			</ul>
			<ul class="Footer-menu-list">
				<a href="http://lexcontractus.es/category/propiedad-industrial-e-intelectual/"><li class="Footer-menu-item">PROPIEDAD INDUSTRIAL E INTELECTUAL</li></a>
				<a href="http://lexcontractus.es/quienes-somos/"><li class="Footer-menu-item">¿QUIENES SOMOS?</li></a>
				<a href="http://lexcontractus.es/contacta/"><li class="Footer-menu-item">CONTACTO</li></a>
			</ul>
			<a href="http://pegido.me"><div class="Footer-autor">
				<p class="Footer-autor-texto">DESIGN &</br> DEVELOPMENT</p>
				<img src="<?php bloginfo('template_url'); ?>/images/pegido.svg" alt="Pablo Egido" class="Footer-autor-logo"></a>
			</div>
		</nav>
		<p class="Footer-copymob">Lex Contractus | 2016</p>
	</footer>
	</div>
</div>
<script src="https://use.fontawesome.com/574a157edd.js"></script>
<script type="text/javascript">
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

</script>
<?php wp_footer ?>
</body>
</html> 