<?php

function uza_header_bgc_init_callback($input){
   return $input;
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
   pr($options);
   if(@$options['transparent'] != 1){
      ?>
      <input type="text" name="color_header_1" value=<?php echo $header_color; ?>>
      <?
   }

}
