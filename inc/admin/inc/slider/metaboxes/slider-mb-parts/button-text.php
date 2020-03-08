<div class="admin_slider_button_text">
   <div class="admin_slider_button_text_div color">
      <div class="admin_slider_button_text">
         <label for="slider_button_text"><?php echo __('Задать текст кнопки'); ?></label>
         <input
            type="text"
            name="slider_button_text"
            value="<?php echo $slider_data['slider_button_text'];  ?>"
            placeholder="<?php echo __('Текст кнопки', 'uza'); ?>"
         >
      </div>
   </div>
   <div class="admin_slider_button_text_div color">
      <div class="admin_slider_button_text">
         <label for="slider_button_text"><?php echo __('Задать цвет кнопки'); ?></label>
         <input
            type="text"
            name="color_button"
            value="<?php echo $slider_data['color_button']; ?>"
         >
         <span><?php echo	$button_collor =  $slider_data['color_button']; ?></span>
      </div>
   </div>
      <style media="screen">
         .welcome-area-admin
         .welcome_area_content
         .welcome_area_text_container
         .welcome_text
         .btn-2 {
            background-color: <?php echo $button_collor; ?>;
            color: #ffffff;
         }
      </style>
</div>
