<?php

register_setting('uza-slider-settings-group', 'title_row');
   add_settings_section('uza-slider-new-options', 'Slider new Options', 'uza_slider_options_new', 'uza_slider_page');
      add_settings_field('slider-terms-new', 'Terms List 2', 'uza_slider_terms_2', 'uza_slider_page', 'uza-slider-options_new');
