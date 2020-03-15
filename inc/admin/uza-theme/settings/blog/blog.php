<?php

register_setting('uza-blog-settings-group', 'blog_title');
register_setting('uza-blog-settings-group', 'blog_description');

add_settings_section('uza-blog-section', __('Секция Блога', 'uza'), 'uza_blog_section_callback',
'uza_blog_page');

   // Title
   add_settings_field('blog-title-field', __('Текст заголовка', 'uza'), 'uza_blog_title_callback', 'uza_blog_page', 'uza-blog-section');

   // Description
   add_settings_field('blog-description-field', __('Текст описания', 'uza'), 'uza_blog_description_callback', 'uza_blog_page', 'uza-blog-section');

   // Background

   // Items layout

   // Item Single
