<?php
// add_settings_field : $id, $title, $callback, $page, $section, $args

register_setting('uza-portfolio-settings-group', 'portfolio_title');
register_setting('uza-portfolio-settings-group', 'portfolio_description');

   add_settings_section('uza-portfolio-section', __('Секция портфолио на главной странице', 'uza'), 'uza_portfolio_section_callback', 'uza_portfolio_page');

      add_settings_field('portfolio-title-field', __('Настройка заголовка', 'uza'), 'uza_portfolio_title_callback', 'uza_portfolio_page', 'uza-portfolio-section');

      add_settings_field('portfolio-description-field', __('Настройка описания', 'uza'), 'uza_portfolio_description_callback', 'uza_portfolio_page', 'uza-portfolio-section');
