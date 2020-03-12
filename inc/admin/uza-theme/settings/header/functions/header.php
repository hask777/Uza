<?php

function uza_header_bgc_init_callback($input){
   return $input;
   // var_dump($input);
}

function uza_header_button_init_callback($button){
   return $button;
   // var_dump($input);
}

function uza_header_section_callback(){
   echo 'hi';
}

function uza_header_bgc_color_init(){
   $options = get_option('header_bgc_init');
   // pr($options['sticky']);
   $formats = array(
      'transparent' => __('Прозрачность', 'uza'),
      'sticky' => __('Фиксирование', 'uza'),
      'image' => __('Изображение', 'uza'),
   );

   $output = '';
   foreach($formats as $format => $value){
      $checked = ( @$options[$format] == 1 ? 'checked' : '' );

      $output .= '<label class="uza_header_options"><input type="checkbox" id="'. $format .'" name="header_bgc_init['.$format.']" value="1"'. $checked .'>'.$value.'</label>';
   }

   echo $output;
}

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

function uza_header_image_callback(){
   $options = get_option('header_bgc_init');
   $header_image = esc_attr(get_option('header_picture'));
   pr($header_image);

   if(@$options['image'] == 1){
      ?>
         <input type="button" id="upload-header-img" value="Upload Image">
         <input type="hidden" id="header-input" name="header_picture" value="<?php $header_image; ?>">

         <div id="header_image_preview" class="header_image_preview">
            <img src="<?php echo $header_image; ?>" alt="">
         </div>
      <?
   }else{
      echo 'Включите пункт изображение';
   }

}

function uza_header_text_color_callback(){
   $header_text_color = esc_attr(get_option('color_header_text'));
   ?>
      <input type="text" name="color_header_text" value="<?php echo $header_text_color; ?>">
   <?
}

function uza_header_size_color_callback(){
   $header_text_size = esc_attr(get_option('header_text_size'));
   ?>
      <input type="text" name="header_text_size" value="<?php echo $header_text_size; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
   <?
}

function uza_header_logo_color_callback(){
   $header_logo_color = esc_attr(get_option('color_header_logo'));
   ?>
      <input type="text" name="color_header_logo" value="<?php echo $header_logo_color; ?>">
   <?
}

function uza_header_logo_size_callback(){
   $header_logo_size = esc_attr(get_option('header_logo_size'));
   ?>
      <input type="text" name="header_logo_size" value="<?php echo $header_logo_size; ?>" placeholder="<?php echo __('Размер текста в PX', 'uza'); ?>">
   <?
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
