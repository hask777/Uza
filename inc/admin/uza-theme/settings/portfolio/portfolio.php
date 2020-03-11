<?php

register_setting('uza-portfolio-settings-group', 'portfolio_title_row');

   add_settings_section('uza-portfolio-section', 'Portfolio new Options', 'uza_portfolio_options_new', 'uza_portfolio_page');
      add_settings_field('portfolio-terms-new', 'Terms List 2', 'uza_portfolio_terms_2', 'uza_portfolio_page', 'uza-portfolio-options_new');
