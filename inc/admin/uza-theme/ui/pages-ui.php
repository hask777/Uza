<?php
// Main Page
function uza_theme_create_main_page(){
    // This function generate html of uza admin page
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/main-page.php');
}

// Settings PAGE
function uza_theme_create_slider_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/slider-page.php');
}
