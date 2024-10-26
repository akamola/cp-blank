<?php
/**
 * Footer template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

?><hr>

	<footer role="contentinfo">

		<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('cpblank-widgetarea-footer') ): ?>

			<?php dynamic_sidebar('cpblank-widgetarea-footer'); ?>

		<?php endif; ?>

	</footer>

<?php wp_footer(); ?>

</body>
</html>
