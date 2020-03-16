<?php
// BUTTON
register_setting('uza-newsletter-settings-group', 'color_newsletter_button');
register_setting('uza-newsletter-settings-group', 'newsletter_button_width');
register_setting('uza-newsletter-settings-group', 'newsletter_button_height');
register_setting('uza-newsletter-settings-group', 'newsletter_button_font_size');
register_setting('uza-newsletter-settings-group', 'color_newsletter_button_font');
register_setting('uza-newsletter-settings-group', 'newsletter_button_font_style');
register_setting('uza-newsletter-settings-group', 'newsletter_button_font_weight');
register_setting('uza-newsletter-settings-group', 'newsletter_button_padding');
register_setting('uza-newsletter-settings-group', 'newsletter_button_border');
register_setting('uza-newsletter-settings-group', 'newsletter_button_border_radius');


   add_settings_field('newsletter-button-color-field', __('Кнопка отправки', 'uza'), 'uza_newsletter_button_color_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-width-field', __('', 'uza'), 'uza_newsletter_button_width_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-height-field', __('', 'uza'), 'uza_newsletter_button_height_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-font-size-field', __('', 'uza'), 'uza_newsletter_button_font_size_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-font-color-field', __('', 'uza'), 'uza_newsletter_button_font_color_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-font-style-field', __('', 'uza'), 'uza_newsletter_button_font_style_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-font-weight-field', __('', 'uza'), 'uza_newsletter_button_font_weight_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-padding-field', __('', 'uza'), 'uza_newsletter_button_padding_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-border-field', __('', 'uza'), 'uza_newsletter_button_border_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-button-border-radius-field', __('', 'uza'), 'uza_newsletter_button_border_radius_callback', 'uza_newsletter_page', 'uza-newsletter-section');
