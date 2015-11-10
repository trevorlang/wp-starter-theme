<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="main-header__wrapper">
	<header class="main-header__container">
		<h1 class="main-header__logo"><a class="main-header__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
		<?php 
			$args = array(
				'theme_location' 	=> 'header',
				'container'			=> 'nav',
				'container_class'	=> 'main-nav__container',
				'container_id'		=> 'main-nav__container',
			);
		?>
		<?php wp_nav_menu( $args ); ?>
	</header>
</section>