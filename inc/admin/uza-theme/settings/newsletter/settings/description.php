<?php

register_setting('uza-newsletter-settings-group', 'newsletter_description');
register_setting('uza-newsletter-settings-group', 'color_newsletter_description');
register_setting('uza-newsletter-settings-group', 'newsletter_description_size');
register_setting('uza-newsletter-settings-group', 'newsletter_description_style');
register_setting('uza-newsletter-settings-group', 'newsletter_description_weight');

   add_settings_field('newsletter-description-field', __('Описание', 'uza'), 'uza_newsletter_description_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-description-color-field', __('', 'uza'), 'uza_newsletter_description_color_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-description-size-field', __('', 'uza'), 'uza_newsletter_description_size_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-description-style-field', __('', 'uza'), 'uza_newsletter_description_style_callback', 'uza_newsletter_page', 'uza-newsletter-section');

   add_settings_field('newsletter-description-weight-field', __('', 'uza'), 'uza_newsletter_description_weight_callback', 'uza_newsletter_page', 'uza-newsletter-section');
