<?php

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
