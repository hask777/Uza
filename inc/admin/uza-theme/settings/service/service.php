<?php
register_setting('uza-services-settings-group', 'service_title');

   add_settings_section('uza-services-options-section', 'Настройки секции сервисов', 'uza_services_section_callback', 'uza_services_page');

      add_settings_field('uza-services-title', 'Заголовок секции сервисов', 'uza_services_title_callback', 'uza_services_page', 'uza-services-options-section');
