<?php

function uza_advertising_section_callback(){
   echo "hi";
}

function uza_advertising_title_callback(){
   $advertis_title = esc_attr(get_option('advertis_title'));
   ?>
      <input type="text" name="advertis_title" value="<?php echo $advertis_title; ?>" placeholder="<?php echo __('Текст заголовка','uza'); ?>">
   <?
}

function uza_advertising_description_callback(){
   $advertis_description =  esc_attr(get_option('advertis_description'));
   // pr($portfolio_description);
   ?>
   <textarea name="advertis_description" rows="8" cols="70"><?php echo $advertis_description; ?></textarea>
   <?
}

function uza_advertising_phone_callback(){
   $phone_number = esc_attr(get_option('advertis_phone_number'));
   ?>
      <input type="text" name="advertis_phone_number" value="<?php echo $phone_number; ?>" placeholder="<?php echo __('Номер телефона','uza'); ?>">
   <?
}

function uza_advertising_addtext_callback(){
   $add_text = esc_attr(get_option('advertis_phone_text'));
   ?>
      <input type="text" name="advertis_phone_text" value="<?php echo $add_text; ?>" placeholder="<?php echo __('Дополнительный текст','uza'); ?>">
   <?
}

function uza_advertising_bgc_callback(){
   $advertis_bgc = esc_attr(get_option('color_advertis_bgc'));
   ?>
      <input type="text" name="color_advertis_bgc" value="<?php echo $advertis_bgc; ?>" placeholder="<?php echo __('Дополнительный текст','uza'); ?>">
   <?
}

function uza_advertising_image_callback(){
   $advertis_image = esc_attr(get_option('advertis_image'));
   ?>
      <input type="button" id="upload-advertis-img" value="Upload Image">
      <input type="hidden" id="advertis-input" name="advertis_image" value="<?php $advertis_image;
      ?>">

      <div id="advertis_image_preview" class="advertis_image_preview">
         <img src="<?php echo $advertis_image; ?>" alt="">
      </div>
   <?
}
