<?php

function uza_newsletter_input_color_callback(){
   $color_newsletter_input = esc_attr(get_option('color_newsletter_input'));
   ?>
   <input type="text" name="color_newsletter_input" value="<?php echo $color_newsletter_input; ?>">
   <?
}

function uza_newsletter_input_width_callback(){
   $newsletter_input_width = esc_attr(get_option('newsletter_input_width'));
   ?>
      <input type="text" name="newsletter_input_width" value="<?php echo $newsletter_input_width; ?>" placeholder="<?php echo __('Ширина поля', 'uza'); ?>">
   <?
}

function uza_newsletter_input_height_callback(){
   $newsletter_input_height = esc_attr(get_option('newsletter_input_height'));
   ?>
      <input type="text" name="newsletter_input_height" value="<?php echo $newsletter_input_height; ?>" placeholder="<?php echo __('Высота поля', 'uza'); ?>">
   <?
}

function uza_newsletter_input_border_callback(){
   $newsletter_input_border = esc_attr(get_option('newsletter_input_border'));
   ?>
      <input type="text" name="newsletter_input_border" value="<?php echo $newsletter_input_border; ?>" placeholder="<?php echo __('Бордюр', 'uza'); ?>">
   <?
}

function uza_newsletter_input_border_radius_callback(){
   $newsletter_input_border_radius = esc_attr(get_option('newsletter_input_border_radius'));
   ?>
      <input type="text" name="newsletter_input_border_radius" value="<?php echo $newsletter_input_border_radius; ?>" placeholder="<?php echo __('Радиус поля', 'uza'); ?>">
   <?
}

function uza_newsletter_input_font_size_callback(){
   $newsletter_input_font_size = esc_attr(get_option('newsletter_input_font_size'));
   ?>
      <input type="text" name="newsletter_input_font_size" value="<?php echo $newsletter_input_font_size; ?>" placeholder="<?php echo __('Размер текста', 'uza'); ?>">
   <?
}
function uza_newsletter_input_font_color_callback(){
   $color_newsletter_input_font = esc_attr(get_option('color_newsletter_input_font'));
   ?>
      <input type="text" name="color_newsletter_input_font" value="<?php echo $color_newsletter_input_font; ?>">
   <?
}

function uza_newsletter_input_font_style_callback(){
   $newsletter_input_font_style = esc_attr(get_option('newsletter_input_font_style'));
   ?>
   <select class="" name="newsletter_input_font_style">
      <option
         value="normal"
         <?php if($newsletter_input_font_style == 'normal') echo 'selected'; ?>
         >normal
      </option>
      <option
         value="italic"
         <?php if($newsletter_input_font_style == 'italic') echo 'selected'; ?>
         >italic
      </option>
      <option
         value="oblique "
         <?php if($newsletter_input_font_style == 'oblique') echo 'selected'; ?>
         >oblique
      </option>
   </select>
   <?
}

function uza_newsletter_input_font_weight_callback(){
   $newsletter_input_font_weight = esc_attr(get_option('newsletter_input_font_weight'));
   ?>
      <select class="" name="newsletter_input_font_weight">
      <option
         value="bold"
         <?php if($newsletter_input_font_weight == 'bold') echo 'selected'; ?>
         >bold
      </option>
      <option
         value="bolder"
         <?php if($newsletter_input_font_weight == 'bolder') echo 'selected'; ?>
         >bolder
      </option>
      <option
         value="lighter"
         <?php if($newsletter_input_font_weight == 'lighter') echo 'selected'; ?>
         >lighter
      </option>
      <option
         value="100"
         <?php if($newsletter_input_font_weight == '100') echo 'selected'; ?>
         >100
      </option>
      <option
         value="200"
         <?php if($newsletter_input_font_weight == '200') echo 'selected'; ?>
         >200
      </option>
      <option
         value="300"
         <?php if($newsletter_input_font_weight == '300') echo 'selected'; ?>
         >300
      </option>
      <option
         value="400"
         <?php if($newsletter_input_font_weight == '400') echo 'selected'; ?>
         >400
      </option>a
      <option
         value="500"
         <?php if($newsletter_input_font_weight == '500') echo 'selected'; ?>
         >500
      </option>
      <option
         value="600"
         <?php if($newsletter_input_font_weight == '600') echo 'selected'; ?>
         >600
      </option>
      <option
         value="700"
         <?php if($newsletter_input_font_weight == '700') echo 'selected'; ?>
         >700
      </option>
      <option
         value="800"
         <?php if($newsletter_input_font_weight == '800') echo 'selected'; ?>
         >800
      </option>
      <option
         value="900"
         <?php if($newsletter_input_font_weight == '900') echo 'selected'; ?>
         >900
      </option>
   </select>
   <?
}

function uza_newsletter_input_padding_callback(){
   $newsletter_input_padding = esc_attr(get_option('newsletter_input_padding'));
   ?>
      <input type="text" name="newsletter_input_padding" value="<?php echo $newsletter_input_padding; ?>" placeholder="<?php echo __('Внутриние отступы', 'uza');?>">
   <?
}
