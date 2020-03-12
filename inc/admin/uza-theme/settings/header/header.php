<?php

// add_settings_field : $id, $title, $callback, $page, $section, $args

register_setting('uza-header-settings-group', 'header_bgc_init', 'uza_header_bgc_init_callback');
register_setting('uza-header-settings-group', 'color_header_1');
register_setting('uza-header-settings-group', 'header_picture');
register_setting('uza-header-settings-group', 'color_header_text');
register_setting('uza-header-settings-group', 'header_text_size');
register_setting('uza-header-settings-group', 'color_header_logo');
register_setting('uza-header-settings-group', 'header_logo_size');

   add_settings_section('uza-header-section', __('Секция Шапки', 'uza'), 'uza_header_section_callback',
   'uza_header_page');

      add_settings_field('header-bgc-init-field', __('Вкл прозрачность шапки', 'uza'), 'uza_header_bgc_color_init', 'uza_header_page', 'uza-header-section');

      add_settings_field('header-title-field', __('Настройка цвета шапки', 'uza'), 'uza_header_background_callback', 'uza_header_page', 'uza-header-section');

      add_settings_field('header-image-field', __('Установить изображение шапки', 'uza'), 'uza_header_image_callback', 'uza_header_page', 'uza-header-section');

      add_settings_field('header-text-color-field', __('Установить цвет текста шапки', 'uza'), 'uza_header_text_color_callback', 'uza_header_page', 'uza-header-section');

      add_settings_field('header-text-size-field', __('Установить размер текста шапки', 'uza'), 'uza_header_size_color_callback', 'uza_header_page', 'uza-header-section');

      add_settings_field('header-logo-color-field', __('Установить цвет Логотипа шапки', 'uza'), 'uza_header_logo_color_callback', 'uza_header_page', 'uza-header-section');

      add_settings_field('header-logo-size-field', __('Установить размер Логотипа шапки', 'uza'), 'uza_header_logo_size_callback', 'uza_header_page', 'uza-header-section');




// background color

// background gradient

// text color

// text size

// Button
   //color
   // bgc
   // size
   // text color
   // text size
   // text font
   // on-off

// Login register on -off
