<?php
/**
 * Error 404 template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

get_header(); ?>

	<div id="content">

		<article class="page error404">

			<h1><?php _e('Page not found', 'cpblank'); ?></h1>

			<p><!-- Insert your error message here --></p>

			<p><code class="error"><?php _e('Error Code 404', 'cpblank'); ?></code></p>

		</article>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
