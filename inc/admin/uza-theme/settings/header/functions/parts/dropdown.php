<?php

function uza_header_dropdown_callback(){
   $dropdown_color = esc_attr(get_option('color_header_dropdown_bgc'));
   ?>
      <input type="text" name="color_header_dropdown_bgc" value="<?php echo $dropdown_color;?>">
   <?
}

function uza_header_dropdown_text_callback(){
   $dropdown_text = esc_attr(get_option('color_header_dropdown_text'));
   ?>
      <input type="text" name="color_header_dropdown_text" value="<?php echo $dropdown_text;?>">
   <?
}
