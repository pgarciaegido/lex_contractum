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
</body>
</html> 