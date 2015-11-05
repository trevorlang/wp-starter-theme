<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section class="swh__wrapper">
	<header class="swh__container">
		<h1 class="swh__logo"><a class="swh__logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
		<h5 class="swh__tag-line"><?php bloginfo('description'); ?></h5>
	</header>
</section>