<?php

function uza_header_logo_color_callback(){
   $header_logo_color = esc_attr(get_option('color_header_logo'));
   ?>
      <input type="text" name="color_header_logo" value="<?php echo $header_logo_color; ?>">
   <?
}
