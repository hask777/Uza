<?php

function uza_header_logo_size_callback(){
   $header_logo_size = esc_attr(get_option('header_logo_size'));
   ?>
      <input type="text" name="header_logo_size" value="<?php echo $header_logo_size; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
   <?
}
