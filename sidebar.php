<?php
/**
 * Sidebar template
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

?><hr>

<aside class="sidebar primary">

	<?php if ( function_exists('dynamic_sidebar') && is_active_sidebar('cpblank-widgetarea-primary') ): ?>

		<?php dynamic_sidebar('cpblank-widgetarea-primary'); ?>

	<?php endif; ?>

</aside>
