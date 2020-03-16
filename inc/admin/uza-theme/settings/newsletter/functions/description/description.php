<?php

function uza_newsletter_description_callback(){
   $newsletter_description = esc_attr(get_option('newsletter_description'));
   ?>
      <input type="text" name="newsletter_description" value="<?php echo $newsletter_description; ?>" placeholder="<?php echo __('Текст описания', 'uza'); ?>">
   <?
}


function uza_newsletter_description_color_callback(){
   $color_newsletter_description = esc_attr(get_option('color_newsletter_description'));
   ?>
      <input type="text" name="color_newsletter_description" value="<?php echo $color_newsletter_description; ?>">
   <?
}

function uza_newsletter_description_size_callback(){
   $newsletter_description_size = esc_attr(get_option('newsletter_description_size'));
   ?>
      <input type="text" name="newsletter_description_size" value="<?php echo $newsletter_description_size; ?>" placeholder="<?php echo __('Размер описания', 'uza'); ?>">
   <?
}

function uza_newsletter_description_style_callback(){
   $newsletter_description_style = esc_attr(get_option('newsletter_description_style'));
   ?>
      <select class="" name="newsletter_description_style">
         <option
            value="normal"
            <?php if($newsletter_description_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($newsletter_description_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($newsletter_description_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_newsletter_description_weight_callback(){
   $newsletter_description_weight = esc_attr(get_option('newsletter_description_weight'));
   ?>
      <select class="" name="newsletter_description_weight">
      <option
         value="bold"
         <?php if($newsletter_description_weight == 'bold') echo 'selected'; ?>
         >bold
      </option>
      <option
         value="bolder"
         <?php if($newsletter_description_weight == 'bolder') echo 'selected'; ?>
         >bolder
      </option>
      <option
         value="lighter"
         <?php if($newsletter_description_weight == 'lighter') echo 'selected'; ?>
         >lighter
      </option>
      <option
         value="100"
         <?php if($newsletter_description_weight == '100') echo 'selected'; ?>
         >100
      </option>
      <option
         value="200"
         <?php if($newsletter_description_weight == '200') echo 'selected'; ?>
         >200
      </option>
      <option
         value="300"
         <?php if($newsletter_description_weight == '300') echo 'selected'; ?>
         >300
      </option>
      <option
         value="400"
         <?php if($newsletter_description_weight == '400') echo 'selected'; ?>
         >400
      </option>a
      <option
         value="500"
         <?php if($newsletter_description_weight == '500') echo 'selected'; ?>
         >500
      </option>
      <option
         value="600"
         <?php if($newsletter_description_weight == '600') echo 'selected'; ?>
         >600
      </option>
      <option
         value="700"
         <?php if($newsletter_description_weight == '700') echo 'selected'; ?>
         >700
      </option>
      <option
         value="800"
         <?php if($newsletter_description_weight == '800') echo 'selected'; ?>
         >800
      </option>
      <option
         value="900"
         <?php if($newsletter_description_weight == '900') echo 'selected'; ?>
         >900
      </option>
   </select>
   <?
}
