<?php
/**
 * Single post template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

?><article id="post-<?php the_ID(); ?>" itemtype="http://schema.org/BlogPosting" itemscope="" <?php post_class(); ?>>

	<?php if ( !is_page() ): ?>
		<header>
	<?php endif; ?>

		<h1 itemprop="name headline"><?php if ( !is_singular() ): ?><a href="<?php the_permalink(); ?>" itemprop="url" rel="bookmark"><?php endif; ?><?php the_title(); ?><?php if ( !is_singular() ): ?></a><?php endif; ?></h1>

		<?php if ( !is_page() ): ?>
			<aside class="meta">

				<p><time datetime="<?php echo get_the_date('Y-m-d\TH:m'); ?>" itemprop="datePublished"><span class="date"><?php echo get_the_date( get_option('date_format') ); ?></span>, <span class="time"><?php the_time( get_option('time_format') ); ?></span></time> · <?php _e('by', 'cpblank') ?> <span itemtype="http://schema.org/Person" itemscope="" itemprop="author"><span itemprop="name"><?php the_author(); ?></span></span> · <?php _e('Categories', 'cpblank'); ?>: <span itemprop="articleSection"><?php the_category(', '); ?></span><?php if ( comments_open() ) : ?> · <?php comments_popup_link( __('<span class="count">0 <span>Comments</span></span>', 'cpblank'), __('<span class="count">1 <span>Comment</span></span>', 'cpblank'), __('<span class="count">% <span>Comments</span></span>', 'cpblank'), $css_class = 'comments'); endif; ?></p>

			</aside>
		<?php endif; ?>

	<?php if ( !is_page() ): ?>
		</header>
	<?php endif; ?>

	<div itemprop="articleBody">
		<?php the_content( __('Continue', 'cpblank') ); ?>
	</div>

	<?php if ( has_tag() && is_singular() && !is_page() ): ?>
		<footer class="meta tags">

			<?php the_tags( __('Tags:'), '<span class="sep">, </span>' ); ?>

		</footer>
	<?php endif; ?>

</article>

<?php if ( !is_page() ): ?>

	<?php comments_template('', true); ?>

<?php endif; ?>
