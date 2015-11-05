<?php
	get_header();
?>
<section class="swc__wrapper">
	<main class="swc__container">
		<h1>Wordpress Starter Theme</h1>
		<p>A pretty damn opinionated starting point for Wordpress theme development using Grunt. Check out the Gruntfile to see all of the fun you can have!</p>
		<?php
			if (have_posts()) :
				while (have_posts()) : the_post(); 
		?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_content(); ?>
		<?php 	
				endwhile;
			else :
				echo '<p>No content found!</p>';
			endif; 
		?>
	</main>
</section>

<?php
	get_footer();
?>