<?php
/**
 * Header template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width, user-scalable=yes">

	<title><?php wp_title($sep = '›', $display = true, $seplocation = 'right'); bloginfo('name'); ?><?php if ( is_front_page() ) { echo ' &#8226; '; bloginfo('description'); } ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">

	<link rel="shortcut icon" type="image/x-icon" href="<?php echo home_url('/'); ?>favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/apple-touch-icon.png">

	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="all">

<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

	<p id="jumper"><a href="#content">[ <?php _e('Jump to content', 'cpblank'); ?> ]</a></p>

	<header>

		<h1><?php if ( !is_front_page() || is_paged() ): ?><a href="<?php echo home_url(); ?>"><?php endif; ?><?php bloginfo('name'); ?><?php if ( !is_front_page() || is_paged() ): ?></a><?php endif; ?></h1>

		<p class="tagline"><?php bloginfo('description'); ?></p>

		<?php if ( has_nav_menu('primary') ): ?>

			<?php wp_nav_menu( array(
				'container' => 'nav',
				'container_id' => 'primary-menu',
				'menu_class' => 'primary-menu',
				'theme_location' => 'primary'
			)); ?>

		<?php endif; ?>

	</header>

	<hr>
