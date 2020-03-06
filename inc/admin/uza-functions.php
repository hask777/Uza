<?php
// ADMIN PAGE

function uza_add_admin_page(){
    // add_menu_page( 'My Page Title', 'My Page', 'edit_others_posts', 'my_page_slug', 'my_page_function', plugins_url( 'myplugin/images/icon.png' ), 6 );
    add_menu_page('Uza Theme Options', 'Uza', 'manage_options', 'uza_main_page', 'uza_theme_create_main_page', '', 110);

    // Add sub pages
    // Uza main page
    add_submenu_page('uza_main_page', 'Uza Settings', 'Settings', 'manage_options', 'uza_main_page', 'uza_theme_create_main_page');
    // Settings pages
    add_submenu_page('uza_main_page', 'Uza Slider', 'Slider', 'manage_options', 'uza_slider_page', 'uza_theme_create_slider_page');

    // Activate our custom settings
    add_action('admin_init', 'uza_custom_settings');

}
add_action('admin_menu', 'uza_add_admin_page');

require_once 'settings/settings.php';
require_once 'ui/pages-ui.php';
