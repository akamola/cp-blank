<?php
/**
 * Pagination template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

?>
<nav class="pagination">

	<?php if ( is_single() ): ?>

		<ul>
			<li class="prev"><?php previous_post_link( '%link' ); ?></li>
			<li class="next"><?php next_post_link( '%link' ); ?></li>
		</ul>

	<?php elseif ( $wp_query->max_num_pages > 1 ): ?>

		<ul>
			<li class="prev"><?php next_posts_link( __('Back', 'cpblank') ); ?></li>
			<li class="next"><?php previous_posts_link( __('Next', 'cpblank') ); ?></li>
		</ul>

	<?php endif ?>

</nav>
