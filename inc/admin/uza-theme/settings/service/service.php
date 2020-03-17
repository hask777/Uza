<?php
register_setting('uza-services-settings-group', 'service_title');
register_setting('uza-services-settings-group', 'services_post_types', 'uza_services_post_types_calback');
register_setting('uza-services-settings-group', 'services_terms_list', 'uza_services_post_terms_calback');
register_setting('uza-services-settings-group', 'service_posts_list');


   add_settings_section('uza-services-options-section', 'Настройки секции сервисов', 'uza_services_section_callback', 'uza_services_page');

      add_settings_field('uza-services-title', 'Заголовок секции сервисов', 'uza_services_title_callback', 'uza_services_page', 'uza-services-options-section');

      add_settings_field('uza-services-post_types', 'Заголовок секции сервисов', 'uza_services_post_types_callback', 'uza_services_page', 'uza-services-options-section');

      add_settings_field('uza-services-terms', 'Заголовок секции сервисов', 'uza_services_terms_callback', 'uza_services_page', 'uza-services-options-section');

      add_settings_field('uza-services-posts', 'Заголовок секции сервисов', 'uza_services_posts_callback', 'uza_services_page', 'uza-services-options-section');
