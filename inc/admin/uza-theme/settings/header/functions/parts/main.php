<?php

function uza_header_bgc_init_callback($input){
   return $input;
   // var_dump($input);
}

function uza_header_bgc_color_init(){
   $options = get_option('header_bgc_init');
   // pr($options['sticky']);
   $formats = array(
      'transparent' => __('Прозрачность', 'uza'),
      'sticky' => __('Фиксированая шапка', 'uza'),
      'image' => __('Изображение', 'uza'),
      'auth' => __('Регистрация и вход', 'uza'),
   );

   $output = '';
   foreach($formats as $format => $value){
      $checked = ( @$options[$format] == 1 ? 'checked' : '' );

      $output .= '<label class="uza_header_options"><input type="checkbox" id="'. $format .'" name="header_bgc_init['.$format.']" value="1"'. $checked .'>'.$value.'</label>';
   }

   echo $output;
}

function uza_header_button_init_callback($button){
   return $button;
   // var_dump($input);
}

function uza_header_button_callback(){
   $header_button_trigger = get_option('header_button_trigger');
   $button_ops = array(
      'show' => __('Показывать', 'uza'),
   );

   $output = '';
   foreach($button_ops as $ops => $value){
      $checked = ( @$header_button_trigger[$ops] == 1 ? 'checked' : '' );

      $output .= '<label class="uza_header_options"><input type="checkbox" id="'. $ops .'" name="header_button_trigger['.$ops.']" value="1"'. $checked .'>'.$value.'</label>';
   }

   echo $output;
}
