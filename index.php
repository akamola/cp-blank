<?php
/**
 * Main template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

get_header(); ?>

	<main id="content">

		<?php /* Headlines */ ?>

		<?php if ( is_category() ): ?>

			<h1><?php single_cat_title(); ?></h1>

			<?php if ( !empty( category_description() ) ): ?>
				<aside class="description">
					<?php echo category_description(); ?>
				</aside>
			<?php endif; ?>

		<?php elseif ( is_tag() ): ?>

			<h1><?php _e('Tag', 'cpblank'); ?>: <?php single_tag_title(); ?></h1>

			<?php if ( !empty( tag_description() ) ): ?>
				<aside class="description">
					<?php echo tag_description(); ?>
				</aside>
			<?php endif; ?>

		<?php elseif ( is_author() ): ?>

			<h1><?php printf( __( 'All posts of %s', 'cpblank' ), get_the_author() ); ?></h1>

			<?php if ( !empty( get_the_author_meta( 'description' ) ) ): ?>
				<aside class="description">
					<?php echo wpautop( get_the_author_meta( 'description' ) ); ?>
				</aside>
			<?php endif; ?>

		<?php elseif ( is_year() ): ?>

			<h1><?php printf( __( '%s', 'cpblank' ), get_query_var('year') ); ?></h1>

		<?php elseif ( is_month() ): ?>

			<h1><?php single_month_title( $sep = ' ' ); ?></h1>

		<?php elseif ( is_day() ): ?>

			<h1><?php echo get_the_archive_title(); ?></h1>

		<?php elseif ( is_search() ): ?>

			<h1><?php printf( __( 'Results for: %s', 'cpblank' ), get_search_query() ); ?></h1>

		<?php else: ?>

			<h1><?php echo get_the_archive_title(); ?></h1>

		<?php endif; ?>

		<?php /* Posts aka. The Loop */ ?>

		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ): the_post(); ?>

				<?php get_template_part('post'); ?>

			<?php endwhile; ?>
		<?php else: ?>
			<p><?php _e('No posts yet.', 'cpblank'); ?></p>
		<?php endif; ?>

		<?php /* Pagination */ ?>

		<?php if ( !is_page() ): // Don't show pagination on single pages ?>

			<?php // Only show pagination if there are more pages
				$prev_link = get_previous_posts_link();
				$next_link = get_next_posts_link();

				if ( is_single() || $prev_link || $next_link ):
			?>

				<?php get_template_part('pagination'); ?>

			<?php endif; ?>

		<?php endif; ?>

	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
