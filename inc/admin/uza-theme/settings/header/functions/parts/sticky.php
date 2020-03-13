<?php

function uza_header_sticky_background_callback(){
   $options = get_option('header_bgc_init');
   if(@$options['sticky'] == 1){
      $header_sticky_color = esc_attr(get_option('color_header_sticky'));
      ?>
         <input type="text" name="color_header_sticky" value="<?php echo $header_sticky_color; ?>">
      <?
   }else{
      echo __('Для настройки этой опции включите пункт фиксрованная шапка', 'uza');
   }
}
