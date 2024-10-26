<?php
/**
 * Template functions
 *
 * Note: Functions are sorted alphabetical by their name.
 *
 * @package ClassicPress
 * @subpackage cp-blank
 * @since cp-blank 1.0.0
 */

/**
 * Check whether a page is a subpage or not.
 * @see http://codex.wordpress.org/Conditional_Tags#Testing_for_sub-Pages
 * @since cp-blank 1.0.0
 * @return False or the parent page object
 */
function is_subpage() {
	global $post;

	if ( is_page() && $post->post_parent ) {
		return $post->post_parent;
	} else {
		return false;
	}
}

/**
 * Custom markup for comments.
 * @see https://codex.wordpress.org/Function_Reference/wp_list_comments
 * @since cp-blank 1.0.0
 * @return void
 */
function cpblank_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;

	extract( $args, EXTR_SKIP );

?><article id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>

	<aside class="meta">

		<p class="avatar"><?php echo get_avatar( get_comment_author_email(), 64 ); ?></p>

		<p class="info"><?php comment_author_link(); ?> <?php _e('on', 'cpblank'); ?> <?php comment_date( get_option('date_format') ); ?>, <?php comment_date( get_option('time_format') ); ?>:</p>

	</aside>

	<div class="body">

		<?php comment_text(); ?>

		<?php if ( $comment->comment_approved == '0' ): ?>
			<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'cpblank' ); ?></p>
		<?php endif; ?>

	</div>

</article><?php
}

function cpblank_comment_end() {
	echo '';
}

/**
 * Add custom JavaScript that depends on jQuery.
 * @see https://codex.wordpress.org/Plugin_API/Action_Reference/wp_enqueue_scripts
 * @since cp-blank 1.0.0
 * @return void
 */
function cpblank_js() {
	wp_enqueue_script(
		$handle = 'custom-script',
		$src = get_template_directory_uri() . '/app.js',
		array( 'jquery' ),
		$ver = false,
		$in_footer = true
	);
}
add_action( 'wp_enqueue_scripts', 'cpblank_js' );

/**
 * Register theme support features.
 * @see http://codex.wordpress.org/Function_Reference/add_theme_support
 * @since cp-blank 1.0.0
 * @return void
 */
function cpblank_support() {
	// Features
	// @see http://codex.wordpress.org/Function_Reference/add_theme_support#Addable_Features

	// HTML5
	// @see http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5

	add_theme_support( 'html5', array(
		'caption',
		'comment-list',
		'comment-form',
		'gallery',
		'search-form'
	));
}
add_action('after_setup_theme', 'cpblank_support');

/**
 * Register theme menus for the WordPress/ClassicPress menu feature.
 * @see https://codex.wordpress.org/Function_Reference/register_nav_menu
 * @since cp-blank 1.0.0
 * @return void
 */
function cpblank_register_menus() {
	if ( function_exists('register_nav_menus') ) {
		register_nav_menus( array(
			'primary'	=> __('Main Navigation', 'cpblank')
		));
	}
}
add_action('after_setup_theme', 'cpblank_register_menus');

/**
 * Register theme sidebars for the WordPress/ClassicPress widget feature.
 * @see https://codex.wordpress.org/Function_Reference/register_sidebars
 * @since cp-blank 1.0.0
 * @return void
 */
function cpblank_register_sidebars() {
	// Primary
	register_sidebar( array(
		'name'			=> __('Sidebar', 'cpblank'),
		'id'			=> 'cpblank-widgetarea-primary',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>'
	));

	// Footer
	register_sidebar( array(
		'name'			=> __('Footer', 'cpblank'),
		'id'			=> 'cpblank-widgetarea-footer',
		'before_widget'	=> '<div class="widget">',
		'after_widget'	=> '</div>'
	));
}
add_action('widgets_init', 'cpblank_register_sidebars');

/**
 * Remove the WordPress emoji embed
 *
 * @see https://www.denisbouquet.com/remove-wordpress-emoji-code/
 * @since cp-blank 1.0.0
 */
// remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
// remove_action( 'wp_print_styles', 'print_emoji_styles' );
// remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
// remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Remove DNS prefetch
 *
 * @see https://fransdejonge.com/2017/11/remove-dns-prefetch-from-wordpress-4-9/
 * @since cp-blank 1.1.0
 */
// remove_action( 'wp_head', 'wp_resource_hints', 2 );

/**
 * Remove the generator meta tag with the WordPress/ClassicPress version from
 * the HTML for better security.
 * @see https://developer.wordpress.org/reference/hooks/the_generator/
 * @since cp-blank 1.0.0
 * @return Empty string
 */
function cpblank_remove_version() {
	return '';
}
add_filter('the_generator', 'cpblank_remove_version');

/**
 * Replace the default login error message to hide any information that may
 * could be used for cracking into the system.
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/login_errors
 * @since cp-blank 1.0.0
 * @return Login error message
 */
function cpblank_wrong_login() {
	return 'Wrong username or password.';
}
add_filter('login_errors', 'cpblank_wrong_login');
