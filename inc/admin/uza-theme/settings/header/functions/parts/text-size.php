<?php

function uza_header_size_color_callback(){
   $header_text_size = esc_attr(get_option('header_text_size'));
   ?>
      <input type="text" name="header_text_size" value="<?php echo $header_text_size; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
   <?
}
