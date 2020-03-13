<?php
// ADMIN PAGE

function uza_add_admin_page(){
   // add_menu_page( 'My Page Title', 'My Page', 'edit_others_posts', 'my_page_slug', 'my_page_function', plugins_url( 'myplugin/images/icon.png' ), 6 );

   add_menu_page('Uza Theme Options', __('Тема', 'uza'), 'manage_options', 'uza_main_page', 'uza_theme_create_main_page', '', 110);

   // Add sub page
      // Uza main page
      add_submenu_page('uza_main_page', 'Uza Settings', __('Настройка', 'uza'), 'manage_options', 'uza_main_page', 'uza_theme_create_main_page');

      // header seatings page
      add_submenu_page('uza_main_page', 'Uza Header', __('Шапка', 'uza'), 'manage_options', 'uza_header_page', 'uza_theme_create_header_page');

      // Slider page
      add_submenu_page('uza_main_page', 'Uza Slider', __('Слайдер', 'uza'), 'manage_options', 'uza_slider_page', 'uza_theme_create_slider_page');

      // Services page
      add_submenu_page('uza_main_page', 'Uza Services', __('Сервисы', 'uza'), 'manage_options', 'uza_service_page', 'uza_theme_create_service_page');

      // Portfolio page
      add_submenu_page('uza_main_page', 'Uza Portfolio', __('Портфолио', 'uza'), 'manage_options', 'uza_portfolio_page', 'uza_theme_create_portfolio_page');

      // Activate our custom settings
      add_action('admin_init', 'uza_custom_settings');

}
add_action('admin_menu', 'uza_add_admin_page');

require_once 'uza-theme/settings/settings.php';
require_once 'front.php';
require_once 'uza-theme/ui/pages-ui.php';

// Create cuatom post type Slider
add_action('init', 'uza_custom_post_type_init');
require_once 'inc/slider/slider-post-type.php';

// Create Metaboxes
add_action('admin_init', 'uza_admin_metabox_init');
require_once 'inc/slider/metaboxes/metabox.php';

// Enqueue scripts and styles
add_action('admin_enqueue_scripts', 'uza_admin_scripts_enqueue');
require_once 'inc/slider/enqueue.php';

// Save slider meta data in DB
add_action('save_post_slider', 'uza_save_slider_post_admin', 10, 3);
require_once 'inc/slider/process/slider_post.php';

// Injection slider meta data to filter
add_filter('the_content', 'uza_slider_data_filter_content');
require_once 'inc/slider/process/slider-data-filter.php';

//Admin styles for slider
require_once 'inc/slider/functions/style-functions.php';

//Admin styles for slider
require_once 'inc/slider/settings/settings.php';
