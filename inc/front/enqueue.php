<?php

/**
 * Enqueue scripts and styles.
 */
function uza_scripts() {
    // Register styles
    wp_register_style( 'uza-aileron', get_template_directory_uri() . '/assets/css/fonts/aileron-font-style.css');
    wp_register_style( 'uza-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_register_style( 'uza-animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_register_style( 'uza-classy', get_template_directory_uri() . '/assets/css/default-assets/classy-nav.css');
    wp_register_style( 'uza-owl', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_register_style( 'uza-magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css');
    wp_register_style( 'uza-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css');
    wp_register_style( 'uza-styles', get_template_directory_uri() . '/assets/css/style.css');
    // Enqueue styles
    wp_enqueue_style('uza-aileron');
    wp_enqueue_style('uza-bootstrap');
    wp_enqueue_style('uza-animate');
    wp_enqueue_style('uza-classy');
    wp_enqueue_style('uza-owl');
    wp_enqueue_style('uza-magnific');
    wp_enqueue_style('uza-font-awesome');
    wp_enqueue_style('uza-styles');
    wp_enqueue_style('uza-style', get_stylesheet_uri());

    // Register uza
    wp_register_script('uza-popper-js', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '20151215', true);
    wp_register_script('uza-bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '20151215', true);
    wp_register_script('uza-bundle-js', get_template_directory_uri() . '/assets/js/uza.bundle.js', array('jquery'), '20151215', true);
    wp_register_script('uza-active-js', get_template_directory_uri() . '/assets/js/default-assets/active.js', array('jquery'), '20151215', true);
    wp_register_script('uza-webpack-bundle-js', get_template_directory_uri() . '/assets/js/custom/bundle.js', array('jquery'), '20151215', true);
    wp_register_script('uza-portfolio-js', get_template_directory_uri() . '/assets/js/custom/portfolio.js', array('jquery'), '20151215', true);

    // Enqueue scripts
    wp_enqueue_script( 'uza-popper-js' );
    wp_enqueue_script( 'uza-bootstrap-js' );
    wp_enqueue_script( 'uza-bundle-js' );
    wp_enqueue_script( 'uza-active-js' );
    wp_enqueue_script( 'uza-webpack-bundle-js' );
    wp_enqueue_script( 'uza-portfolio-js' );

    wp_localize_script('uza-bundle-js', 'stb_ajax_tabs_script', array(
		'url' => admin_url('admin-ajax.php'),
		'nonce' => wp_create_nonce('tabs-nonce')
	));

	wp_enqueue_script( 'uza-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'uza-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'uza_scripts' );
