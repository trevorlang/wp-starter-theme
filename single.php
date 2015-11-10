<?php
	get_header();
?>
<section class="main-content__wrapper">
	<main class="main-content__container">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post(); 
		?>
		<h1><?php the_title(); ?></h1>
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