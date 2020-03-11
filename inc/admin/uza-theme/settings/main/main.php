<?php

register_setting('uza-settings-group', 'posts_list');
register_setting('uza-settings-group', 'terms_list');

   add_settings_section('uza-slider-options', 'Slider Options', 'uza_slider_options', 'uza_main_page');
      add_settings_field('slider-posts', 'Posts List', 'uza_slider_posts', 'uza_main_page', 'uza-slider-options');
      add_settings_field('slider-terms', 'Terms List', 'uza_slider_terms', 'uza_main_page', 'uza-slider-options');
