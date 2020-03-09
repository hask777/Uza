<!-- Button text -->
<div class="admin_slider_button_text">
   <div class="trigger">
      <span>Button Text</span>
   </div>
   <div class="admin_slider_button_text_div">
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
   <!-- Button Color -->
   <div class="trigger">
      <span>Button Color</span>
   </div>
   <div class="admin_slider_button_text_div">
      <div class="admin_slider_button_text">
         <label for="slider_button_text"><?php echo __('Задать цвет кнопки'); ?></label>
         <input
            type="text"
            name="color_button"
            value="<?php echo $slider_data['color_button']; ?>"
         >
         <span><?php echo	$button_collor = $slider_data['color_button']; ?></span>
         <label for="">Добавить  CSS класс</label>
         <input type="text" name="slide_class_name" value="<?php echo $slider_data['slide_class_name'] ?>">
      </div>
   </div>
   <!-- Background Color -->
   <div class="trigger">
      <span>Background Slide Color</span>
   </div>
   <div class="admin_slider_button_text_div">
      <div class="admin_slider_button_text">
         <label for="color_background"><?php echo __('Задать цвет фона слайда'); ?></label>
         <input
            type="text"
            name="color_background"
            value="<?php echo $slider_data['color_background']; ?>"
         >
         <span><?php echo	$button_collor = $slider_data['color_button']; ?></span>
         <label for="slide_class_name">Добавить  CSS класс</label>
         <input type="text" name="slide_class_name" value="<?php echo $slider_data['slide_class_name']; ?>">
      </div>
   </div>
   <!-- Title Text -->

   <!-- Title Font Size -->

   <!-- Title Font Weight -->
      <!-- Button -->
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
      <!-- Background -->
      <style media="screen">
         .welcome-area-admin
         .admin_slider_bgc
         {
            background-color: <?php echo $slider_data['color_background']; ?>;
            opacity: 0.5;
         }
      </style>
</div>
