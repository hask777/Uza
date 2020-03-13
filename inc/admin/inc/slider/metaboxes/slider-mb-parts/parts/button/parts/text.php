<div class="trigger">
   <span><?php echo __('Текст', 'uza'); ?></span>
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
   <div class="admin_slider_button_text">
      <label for="color_slider_button_text"><?php echo __('Задать цвет текста'); ?></label>
      <input
         type="text"
         name="color_slider_button_text"
         value="<?php echo $slider_data['color_slider_button_text'];  ?>"
         placeholder="<?php echo __('Текст кнопки', 'uza'); ?>"
      >
   </div>
   <div class="admin_slider_setting_div">
      <label for="button_font_weight"><?php echo __('Задать стиль текста'); ?></label>
      <select class="" name="button_font_weight">
         <option
            value="bold"
            <?php if($slider_data['button_font_weight'] == 'bold') echo 'selected'; ?>
            >bold
         </option>
         <option
            value="bolder"
            <?php if($slider_data['button_font_weight'] == 'bolder') echo 'selected'; ?>
            >bolder
         </option>
         <option
            value="lighter"
            <?php if($slider_data['button_font_weight'] == 'lighter') echo 'selected'; ?>
            >lighter
         </option>
         <option
            value="100"
            <?php if($slider_data['button_font_weight'] == '100') echo 'selected'; ?>
            >100
         </option>
         <option
            value="200"
            <?php if($slider_data['button_font_weight'] == '200') echo 'selected'; ?>
            >200
         </option>
         <option
            value="300"
            <?php if($slider_data['button_font_weight'] == '300') echo 'selected'; ?>
            >300
         </option>
         <option
            value="400"
            <?php if($slider_data['button_font_weight'] == '400') echo 'selected'; ?>
            >400
         </option>
         <option
            value="500"
            <?php if($slider_data['button_font_weight'] == '500') echo 'selected'; ?>
            >500
         </option>
         <option
            value="600"
            <?php if($slider_data['button_font_weight'] == '600') echo 'selected'; ?>
            >600
         </option>
         <option
            value="700"
            <?php if($slider_data['button_font_weight'] == '700') echo 'selected'; ?>
            >700
         </option>
         <option
            value="800"
            <?php if($slider_data['button_font_weight'] == '800') echo 'selected'; ?>
            >800
         </option>
         <option
            value="900"
            <?php if($slider_data['button_font_weight'] == '900') echo 'selected'; ?>
            >900
         </option>
      </select>
   </div>
   <div class="admin_slider_setting_div">
      <label for="button_font_size"><?php echo __('Задать размер текста'); ?></label>
      <input
         type="text"
         name="button_font_size"
         value="<?php echo $slider_data['button_font_size']; ?>"
         placeholder="<?php echo __('Введите размер PX', 'uza'); ?>"
      >
   </div>
   <div class="admin_slider_setting_div">
      <label for="button_font_style"><?php echo __('Задать стиль текста'); ?></label>
      <select class="" name="button_font_style">
         <option
            value="normal"
            <?php if($slider_data['button_font_style'] == 'normal') echo 'selected'; ?>
            >normal
         </option>
         <option
            value="italic"
            <?php if($slider_data['button_font_style'] == 'italic') echo 'selected'; ?>
            >italic
         </option>
         <option
            value="oblique "
            <?php if($slider_data['button_font_style'] == 'oblique') echo 'selected'; ?>
            >oblique
         </option>
      </select>
   </div>
</div>
