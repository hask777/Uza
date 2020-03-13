<?php

register_setting('uza-service-settings-group', 'service_title');

   add_settings_section('uza-service-options-section', __('Настройка Секции Сервисов', 'uza'), 'uza_service_section_callback', 'uza_service_page');

      add_settings_field('service-page-title', __('Главный заголовок', 'uza'), 'uza_service_title_callback', 'uza_service_page', 'uza-service-options-section');
