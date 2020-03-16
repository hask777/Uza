<?php

register_setting('uza-newsletter-settings-group', 'newsletter_title');
register_setting('uza-newsletter-settings-group', 'color_newsletter_title');
register_setting('uza-newsletter-settings-group', 'newsletter_title_size');
register_setting('uza-newsletter-settings-group', 'newsletter_title_style');
register_setting('uza-newsletter-settings-group', 'newsletter_title_weight');

   add_settings_field('newsletter-title-field', __('Заголовок', 'uza'), 'uza_newsletter_title_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-title-color-field', __('', 'uza'), 'uza_newsletter_title_color_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-title-size-field', __('', 'uza'), 'uza_newsletter_title_size_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-title-style-field', __('', 'uza'), 'uza_newsletter_title_style_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-title-weight-field', __('', 'uza'), 'uza_newsletter_title_weight_callback', 'uza_newsletter_page', 'uza-newsletter-section');
