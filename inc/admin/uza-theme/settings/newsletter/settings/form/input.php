<?php

// INPUT
register_setting('uza-newsletter-settings-group', 'color_newsletter_input');
register_setting('uza-newsletter-settings-group', 'newsletter_input_width');
register_setting('uza-newsletter-settings-group', 'newsletter_input_height');
register_setting('uza-newsletter-settings-group', 'newsletter_input_border');
register_setting('uza-newsletter-settings-group', 'newsletter_input_border_radius');
register_setting('uza-newsletter-settings-group', 'color_newsletter_input_font');
register_setting('uza-newsletter-settings-group', 'newsletter_input_font_size');
register_setting('uza-newsletter-settings-group', 'newsletter_input_font_style');
register_setting('uza-newsletter-settings-group', 'newsletter_input_font_weight');
register_setting('uza-newsletter-settings-group', 'newsletter_input_padding');


   // INPUT
   add_settings_field('newsletter-input-color-field', __('Форма', 'uza'), 'uza_newsletter_input_color_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-width-field', __('', 'uza'), 'uza_newsletter_input_width_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-height-field', __('', 'uza'), 'uza_newsletter_input_height_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-border-field', __('', 'uza'), 'uza_newsletter_input_border_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-border-radius-field', __('', 'uza'), 'uza_newsletter_input_border_radius_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-font-color-field', __('', 'uza'), 'uza_newsletter_input_font_color_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-font-size-field', __('', 'uza'), 'uza_newsletter_input_font_size_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-font-style-field', __('', 'uza'), 'uza_newsletter_input_font_style_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-font-weight-field', __('', 'uza'), 'uza_newsletter_input_font_weight_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-input-padding-field', __('', 'uza'), 'uza_newsletter_input_padding_callback', 'uza_newsletter_page', 'uza-newsletter-section');
