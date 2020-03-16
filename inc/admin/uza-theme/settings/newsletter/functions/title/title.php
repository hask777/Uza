<?php

function uza_newsletter_section_callback(){

}

function uza_newsletter_title_callback(){
   $newsletter_title = esc_attr(get_option('newsletter_title'));
   ?>
   <label for="">Текст</label>
      <input type="text" name="newsletter_title" value="<?php echo $newsletter_title; ?>" placeholder="<?php echo __('Текст заголовка', 'uza'); ?>">
   <?
}


function uza_newsletter_title_color_callback(){
   $newsletter_title_color = esc_attr(get_option('color_newsletter_title'));
   ?>
      <input type="text" name="color_newsletter_title" value="<?php echo $newsletter_title_color; ?>">
   <?
}

function uza_newsletter_title_size_callback(){
   $newsletter_title_size = esc_attr(get_option('newsletter_title_size'));
   ?>
      <input type="text" name="newsletter_title_size" value="<?php echo $newsletter_title_size; ?>" placeholder="<?php echo __('Размер заголовка', 'uza'); ?>">
   <?
}

function uza_newsletter_title_style_callback(){
   $newsletter_title_style = esc_attr(get_option('newsletter_title_style'));
   ?>
      <select class="" name="newsletter_title_style">
         <option
            value="normal"
            <?php if($newsletter_title_style == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($newsletter_title_style == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($newsletter_title_style == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   <?
}

function uza_newsletter_title_weight_callback(){
   $newsletter_title_weight = esc_attr(get_option('newsletter_title_weight'));
   ?>
      <select class="" name="newsletter_title_weight">
      <option
         value="bold"
         <?php if($newsletter_title_weight == 'bold') echo 'selected'; ?>
         >bold
      </option>
      <option
         value="bolder"
         <?php if($newsletter_title_weight == 'bolder') echo 'selected'; ?>
         >bolder
      </option>
      <option
         value="lighter"
         <?php if($newsletter_title_weight == 'lighter') echo 'selected'; ?>
         >lighter
      </option>
      <option
         value="100"
         <?php if($newsletter_title_weight == '100') echo 'selected'; ?>
         >100
      </option>
      <option
         value="200"
         <?php if($newsletter_title_weight == '200') echo 'selected'; ?>
         >200
      </option>
      <option
         value="300"
         <?php if($newsletter_title_weight == '300') echo 'selected'; ?>
         >300
      </option>
      <option
         value="400"
         <?php if($newsletter_title_weight == '400') echo 'selected'; ?>
         >400
      </option>a
      <option
         value="500"
         <?php if($newsletter_title_weight == '500') echo 'selected'; ?>
         >500
      </option>
      <option
         value="600"
         <?php if($newsletter_title_weight == '600') echo 'selected'; ?>
         >600
      </option>
      <option
         value="700"
         <?php if($newsletter_title_weight == '700') echo 'selected'; ?>
         >700
      </option>
      <option
         value="800"
         <?php if($newsletter_title_weight == '800') echo 'selected'; ?>
         >800
      </option>
      <option
         value="900"
         <?php if($newsletter_title_weight == '900') echo 'selected'; ?>
         >900
      </option>
   </select>
   <?
}
