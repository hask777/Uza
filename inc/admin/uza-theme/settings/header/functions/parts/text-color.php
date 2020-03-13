<?php

function uza_header_text_color_callback(){
   $header_text_color = esc_attr(get_option('color_header_text'));
   ?>
      <input type="text" name="color_header_text" value="<?php echo $header_text_color; ?>">
   <?
}
