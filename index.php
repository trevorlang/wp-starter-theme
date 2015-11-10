<?php
	get_header();
?>
<section class="main-content__wrapper">
	<section class="intro-hero">
		<h1 class="intro-hero__heading">Wordpress Starter Theme</h1>
		<p class="intro-hero__message">A starting point for Wordpress theme development using Grunt.</p>
	</section>
	<main class="main-content__container">
		<?php
			if ( have_posts() ) :
				while (have_posts()) : the_post(); 
		?>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_excerpt(); ?>
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