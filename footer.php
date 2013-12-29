	<footer class="site-footer clearfix">
		<div class="container">
			<p class="site-copyright">&copy; <?php echo date("Y"); ?> <?php echo site_name(); ?></p>
		</div>
	</footer>

		<!-- jQuery freshly squeezed -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- If they're out, grab some locally -->
		<script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>

		<!-- Custom JS -->
		<script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/jpanelmenu.min.js'); ?>"></script>

		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-46739826-1', 'douglogue.me');
		  ga('send', 'pageview');
		
		</script>
	</body>
</html>