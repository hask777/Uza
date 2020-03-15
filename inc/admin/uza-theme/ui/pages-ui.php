<?php
// Main Page
function uza_theme_create_main_page(){
    // This function generate html of uza admin page
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/main-page.php');
}

// header Page
function uza_theme_create_header_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/header-page.php');
}

// Settings Page
function uza_theme_create_slider_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/slider-page.php');
}

function uza_theme_create_services_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/service-page.php');
}

// Settings Page
function uza_theme_create_portfolio_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/portfolio-page.php');
}

function uza_theme_create_advertising_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/advertising-page.php');
}

function uza_theme_create_blog_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/blog-page.php');
}

function uza_theme_create_newsletter_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/newsletter-page.php');
}

function uza_theme_create_footer_page(){
    require_once (get_template_directory() . '/inc/admin/uza-theme/templates/footer-page.php');
}
