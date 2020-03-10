<!-- Button Color -->
<div class="trigger">
   <span><?php echo __('Цвет кнопки', 'uza'); ?></span>
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
