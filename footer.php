	<section class="main-footer__wrapper">
		<footer class="main-footer__container">
			<nav>
				<?php 
					$args = array(
						'theme_location' 	=> 'footer',
						'container'			=> 'nav',
						'container_class'	=> 'footer-nav__container',
					);
				?>
				<?php wp_nav_menu( $args ); ?>
			</nav>
		</footer>
	</section>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript">
		if(typeof jQuery === 'undefined'){
			document.write(unescape("%3Cscript src='<?php get_template_directory_uri() ?>/js/vendor/jquery.1.x.min.js' type='text/javascript'%3E%3C/script%3E"));
		}
	</script>
	<?php wp_footer(); ?>
</body>
</html>