<?php
/**
 * Comment area template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

if ( comments_open() ): ?>

	<aside id="comments" class="comments">

		<h1><?php _e('Comments', 'cpblank'); ?></h1>

		<?php if ( have_comments() ): ?>

			<?php wp_list_comments(array(
				'walker'			=> null,
				'max_depth'			=> '',
				'style'				=> 'div',
				'callback'			=> 'cpblank_comment',
				'end-callback'		=> 'cpblank_comment_end',
				'type'				=> 'comment',
				'reply_text'		=> __( 'Reply', 'cpblank' ),
				'page'				=> '',
				'per_page'			=> '',
				'avatar_size'		=> 64,
				'reverse_top_level'	=> null,
				'reverse_children'	=> '',
				'format'			=> 'html5',
				'short_ping'		=> false,
				'echo'				=> true
			)); ?>

		<?php endif; ?>

		<?php comment_form(); ?>

	</aside>

<?php endif; ?>
