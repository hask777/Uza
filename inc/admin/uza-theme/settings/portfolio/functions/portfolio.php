<?php

function uza_portfolio_section_callback(){
   echo __('Настройки', 'uza');
}

function uza_portfolio_title_callback(){
   $portfolio_title =  esc_attr(get_option('portfolio_title'));
   // pr($portfolio_title);
   ?>
   <input type="text" name="portfolio_title" value="<?php echo $portfolio_title; ?>" placeholder="<?php echo __('Текст заголовка', 'uza'); ?>">
   <?
}

function uza_portfolio_description_callback(){
   $portfolio_description =  esc_attr(get_option('portfolio_description'));
   // pr($portfolio_description);
   ?>
   <textarea name="portfolio_description" rows="8" cols="80"><?php echo $portfolio_description; ?></textarea>
   <?
}
