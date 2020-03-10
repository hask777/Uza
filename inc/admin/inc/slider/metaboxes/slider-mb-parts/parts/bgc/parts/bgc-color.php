<label for="color_background"><?php echo __('Задать цвет фона слайда'); ?></label>
<input
   type="text"
   name="color_background"
   value="<?php echo $slider_data['color_background']; ?>"
>
<span><?php echo	$button_collor = $slider_data['color_button']; ?></span>
<label for="slide_class_name">Добавить  CSS класс</label>
<input type="text" name="slide_class_name" value="<?php echo $slider_data['slide_class_name']; ?>">
