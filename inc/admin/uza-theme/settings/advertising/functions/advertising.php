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

function uza_advertising_title_color_callback(){
   $advertis_title_color = esc_attr(get_option('color_advertis_title'));
   ?>
      <input type="text" name="color_advertis_title" value="<?php echo $advertis_title_color; ?>">
   <?
}

function uza_advertising_title_size_callback(){
   $advertis_title_size = esc_attr(get_option('advertis_title_size'));
   ?>
      <input type="text" name="advertis_title_size" value="<?php echo $advertis_title_size; ?>" placeholder="<?php echo __('Размер заголовка PX','uza'); ?>">
   <?
}

function uza_advertising_title_style_callback(){
   $advertis_title_style = esc_attr(get_option('advertis_title_style'));
   ?>
      <select class="" name="advertis_title_style">
         <option
            value="normal"
            <?php if($advertis_title_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($advertis_title_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($advertis_title_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_advertising_description_callback(){
   $advertis_description =  esc_attr(get_option('advertis_description'));
   // pr($portfolio_description);
   ?>
   <textarea name="advertis_description" rows="8" cols="70"><?php echo $advertis_description; ?></textarea>
   <?
}

function uza_advertising_description_color_callback(){
   $advertis_description_color =  esc_attr(get_option('color_advertis_description'));
   // pr($portfolio_description);
   ?>
   <input name="color_advertis_description" value="<?php echo $advertis_description_color; ?>">
   <?
}

function uza_advertising_description_size_callback(){
   $advertis_description_size = esc_attr(get_option('advertis_description_size'));
   ?>
      <input type="text" name="advertis_description_size" value="<?php echo $advertis_description_size; ?>" placeholder="<?php echo __('Размер описания PX','uza'); ?>">
   <?
}

function uza_advertising_description_style_callback(){
   $advertis_description_style = esc_attr(get_option('advertis_description_style'));
   ?>
      <select class="" name="advertis_description_style">
         <option
            value="normal"
            <?php if($advertis_description_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($advertis_description_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($advertis_description_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_advertising_phone_callback(){
   $phone_number = esc_attr(get_option('advertis_phone_number'));
   ?>
      <input type="text" name="advertis_phone_number" value="<?php echo $phone_number; ?>" placeholder="<?php echo __('Номер телефона','uza'); ?>">
   <?
}

function uza_advertising_phone_color_callback(){
   $phone_number_color = esc_attr(get_option('color_advertis_phone_number'));
   ?>
      <input type="text" name="color_advertis_phone_number" value="<?php echo $phone_number_color; ?>">
   <?
}

function uza_advertising_phone_size_callback(){
   $advertis_phone_text_size = esc_attr(get_option('advertis_phone_text_size'));
   ?>
      <input type="text" name="advertis_phone_text_size" value="<?php echo $advertis_phone_text_size; ?>" placeholder="<?php echo __('Размер текста PX','uza'); ?>">
   <?
}

function uza_advertising_phone_style_callback(){
   $advertis_phone_text_style= esc_attr(get_option('advertis_phone_text_style'));
   ?>
      <select class="" name="advertis_phone_text_style">
         <option
            value="normal"
            <?php if($advertis_phone_text_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($advertis_phone_text_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($advertis_phone_text_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
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

function uza_advertising_bgc_opacity_callback(){
   $advertis_opacity_bgc = esc_attr(get_option('advertis_bgc_opacity'));
   ?>
      <input type="text" name="advertis_bgc_opacity" value="<?php echo $advertis_opacity_bgc; ?>"
      placeholder="<?php echo __('0.0','uza'); ?>">
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
