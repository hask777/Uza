<?php

function uza_admin_scripts_enqueue(){
    // wp_register_style( 'bootstrap_wp_admin_css',  'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', false, '1.0.0' );
    wp_register_style( 'custom_wp_admin_css',  get_template_directory_uri() . '/inc/admin/assets/css/style.css', false, '1.0.0' );
    // wp_enqueue_style( 'bootstrap_wp_admin_css' );
    wp_enqueue_style( 'custom_wp_admin_css' );


    wp_register_script( 'custom_wp_admin_js',  get_template_directory_uri() . '/inc/admin/assets/js/script.js', array(), '1.0.0' );
    wp_enqueue_script( 'custom_wp_admin_js' );

    // подключаем IRIS
	wp_enqueue_script( 'wp-color-picker' );
	wp_enqueue_style( 'wp-color-picker' );
}
