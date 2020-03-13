<?php

function uza_header_background_callback(){
   $header_color = esc_attr(get_option('color_header_1'));
   $options = get_option('header_bgc_init');
   //pr($options);
   if(@$options['transparent'] != 1){
      ?>
      <input type="text" name="color_header_1" value=<?php echo $header_color; ?>>
      <?
   }else{
      echo __('Отключите прозрачность что бы настроить цвет', 'uza');
   }
}
