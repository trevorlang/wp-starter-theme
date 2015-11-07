	<section class="swf__wrapper">
		<footer class="swf__container">
			<nav>
				<?php 
					$args = array(
						'theme-location' 	=> 'footer',
						'container'			=> 'nav',
						'container_class'	=> 'swf__nav-menu',
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