<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uza_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'uza' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'uza' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s our-link">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'uza' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'uza' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s our-link">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'uza' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'uza' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s our-link">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'uza' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'uza' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'uza_widgets_init' );
