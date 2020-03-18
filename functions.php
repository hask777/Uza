<?php
/**
 * uza functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uza
 */

 /**
  * Gutenberg functions.
  */
 require get_template_directory() . '/inc/admin/uza-functions.php';

 /**
  * Add Images field to terms.
  */
 require get_template_directory() . '/inc/cat-image.php';

 /**
  * Gutenberg functions.
  */
 require get_template_directory() . '/inc/gutenberg.php';

 /**
  * Setup.
  */
 require get_template_directory() . '/inc/setup.php';

/**
 * Helpers.
 */
require get_template_directory() . '/inc/helper.php';

/**
 * Widgets init.
 */
require get_template_directory() . '/inc/widgets/widgets_init.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/post-types/portfolio.php';

/**
 *  REST url for portfolio post type.
 */
require get_template_directory() . '/inc/rest/portfolio-api.php';

/**
 *   AJAX
 */
require get_template_directory() . '/inc/rest/ajax.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/classes/uza-walker-nav-menu-class.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/classes/uza-wp-widget-social-class.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/classes/uza-wp-widget-info-class.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/front/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
