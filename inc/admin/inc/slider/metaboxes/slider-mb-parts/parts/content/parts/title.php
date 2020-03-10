<div class="trigger">
   <span><?php echo __('Заголовок', 'uza'); ?></span>
</div>
<div class="admin_slider_button_text_div">
   <!-- Title Color -->
   <div class="admin_slider_button_text">
      <label for="color_title"><?php echo __('Задать Цвет Заголовка'); ?></label>
      <input
         type="text"
         name="color_title"
         value="<?php echo $slider_data['color_title']; ?>"
      >
   </div>
   <!-- Title Font Size -->
   <div class="admin_slider_button_text">
      <label for="color_title"><?php echo __('Задать Размер Заголовка'); ?></label>
      <input
         type="text"
         name="title_font_size"
         value="<?php echo $slider_data['title_font_size']; ?>"
         placeholder="<?php echo __('Введите размер PX', 'uza'); ?>"
      >
   </div>
   <!-- Title Font Style -->
   <div class="admin_slider_button_text">
      <label for="color_title"><?php echo __('Задать Стиль Заголовка'); ?></label>
      <select class="" name="title_font_style">
         <option
            value="italic"
            <?php if($slider_data['title_font_style'] == 'italic') echo 'selected'; ?>
            >italic
         </option>
      </select>
   </div>
</div>
