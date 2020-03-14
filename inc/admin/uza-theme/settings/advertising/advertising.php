<?php

register_setting('uza-advertising-settings-group', 'advertis_title');
register_setting('uza-advertising-settings-group', 'advertis_description');
register_setting('uza-advertising-settings-group', 'advertis_phone_number');
register_setting('uza-advertising-settings-group', 'advertis_phone_text');
register_setting('uza-advertising-settings-group', 'color_advertis_bgc');
register_setting('uza-advertising-settings-group', 'advertis_image');

   add_settings_section('uza-advertising-section', __('Секция рекламы', 'uza'), 'uza_advertising_section_callback',
   'uza_advertising_page');

   add_settings_field('header-advertising-title-field', __('Текст заголовка', 'uza'), 'uza_advertising_title_callback', 'uza_advertising_page', 'uza-advertising-section');

   add_settings_field('header-advertising-description-field', __('Текст описания', 'uza'), 'uza_advertising_description_callback', 'uza_advertising_page', 'uza-advertising-section');

   add_settings_field('header-advertising-phone-field', __('Номер телефона', 'uza'), 'uza_advertising_phone_callback', 'uza_advertising_page', 'uza-advertising-section');

   add_settings_field('header-advertising-addtext-field', __('Дополнительный текст', 'uza'), 'uza_advertising_addtext_callback', 'uza_advertising_page', 'uza-advertising-section');

   add_settings_field('header-advertising-bgc-field', __('Цвет фона', 'uza'), 'uza_advertising_bgc_callback', 'uza_advertising_page', 'uza-advertising-section');

   add_settings_field('header-advertising-image-field', __('Фоновое изображение', 'uza'), 'uza_advertising_image_callback', 'uza_advertising_page', 'uza-advertising-section');
