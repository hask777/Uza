<?php
// title
register_setting('uza-advertising-settings-group', 'advertis_title');
register_setting('uza-advertising-settings-group', 'advertis_title_size');
register_setting('uza-advertising-settings-group', 'advertis_title_style');
register_setting('uza-advertising-settings-group', 'color_advertis_title');
// description
register_setting('uza-advertising-settings-group', 'advertis_description');
register_setting('uza-advertising-settings-group', 'color_advertis_description');
register_setting('uza-advertising-settings-group', 'advertis_description_size');
register_setting('uza-advertising-settings-group', 'advertis_description_style');
// Phone
register_setting('uza-advertising-settings-group', 'advertis_phone_number');
register_setting('uza-advertising-settings-group', 'color_advertis_phone_number');
register_setting('uza-advertising-settings-group', 'advertis_phone_number_text_size');
register_setting('uza-advertising-settings-group', 'advertis_phone_number_text_style');

register_setting('uza-advertising-settings-group', 'advertis_phone_text');
register_setting('uza-advertising-settings-group', 'color_advertis_phone_text');
register_setting('uza-advertising-settings-group', 'advertis_phone_text_size');
register_setting('uza-advertising-settings-group', 'advertis_phone_text_style');
// Backgroubd
register_setting('uza-advertising-settings-group', 'color_advertis_bgc');
register_setting('uza-advertising-settings-group', 'advertis_bgc_opacity');
register_setting('uza-advertising-settings-group', 'advertis_image');

   add_settings_section('uza-advertising-section', __('Секция рекламы', 'uza'), 'uza_advertising_section_callback',
   'uza_advertising_page');
      // Title
      add_settings_field('header-advertising-title-field', __('Текст заголовка', 'uza'), 'uza_advertising_title_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-title-color-field', __('Цвет заголовка', 'uza'), 'uza_advertising_title_color_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-title-size-field', __('Размер заголовка', 'uza'), 'uza_advertising_title_size_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-title-style-field', __('Стиль заголовка', 'uza'), 'uza_advertising_title_style_callback', 'uza_advertising_page', 'uza-advertising-section');

      // Description
      add_settings_field('header-advertising-description-field', __('Текст описания', 'uza'), 'uza_advertising_description_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-description-color-field', __('Цвет описания', 'uza'), 'uza_advertising_description_color_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-description-size-field', __('Размер описания', 'uza'), 'uza_advertising_description_size_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-description-style-field', __('Стиль описания', 'uza'), 'uza_advertising_description_style_callback', 'uza_advertising_page', 'uza-advertising-section');


      // Phone
      add_settings_field('header-advertising-phone-field', __('Номер телефона', 'uza'), 'uza_advertising_phone_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-phone-color-field', __('Цвет текста номера телефона', 'uza'), 'uza_advertising_phone_color_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-phone-size-field', __('Размер текста номерв телефона', 'uza'), 'uza_advertising_phone_size_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-phone-style-field', __('Стиль текста номера телефона', 'uza'), 'uza_advertising_phone_style_callback', 'uza_advertising_page', 'uza-advertising-section');

      // Additional text
      add_settings_field('header-advertising-addtext-field', __('Дополнительный текст', 'uza'), 'uza_advertising_addtext_callback', 'uza_advertising_page', 'uza-advertising-section');

      // Bgc
      add_settings_field('header-advertising-bgc-field', __('Цвет фона', 'uza'), 'uza_advertising_bgc_callback', 'uza_advertising_page', 'uza-advertising-section');

      add_settings_field('header-advertising-bgc-opacity-field', __('Прозрачность фона', 'uza'), 'uza_advertising_bgc_opacity_callback', 'uza_advertising_page', 'uza-advertising-section');

      // Image
      add_settings_field('header-advertising-image-field', __('Фоновое изображение', 'uza'), 'uza_advertising_image_callback', 'uza_advertising_page', 'uza-advertising-section');
