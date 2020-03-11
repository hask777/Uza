<?php

function uza_header_bgc_init_callback($input){
   return $input;
}

function uza_header_section_callback(){
   echo 'hi';
}

function uza_header_bgc_color_init(){
   $header_bgc_init = get_option('header_bgc_init');
   $checked = ( @$header_bgc_init == '1' ? 'checked' : '' );
    pr($header_bgc_init);
   ?>
      <input type="checkbox" name="header_bgc_init" value="<?php echo $checked; ?>">
   <?
}

function uza_header_background_callback(){
   $header_color = esc_attr(get_option('color_header_1'));
   // pr($header_color);
   ?>
   <input type="text" name="color_header_1" value=<?php echo $header_color; ?>>
   <?
}
