<div class="admin_slider_setting_div">
   <label for="color_title"><?php echo __('Задать Стиль Заголовка'); ?></label>
   <select class="" name="title_font_style">
      <option
         value="normal"
         <?php if($slider_data['title_font_style'] == 'normal') echo 'selected'; ?>
         >normal
      </option>
      <option
         value="italic"
         <?php if($slider_data['title_font_style'] == 'italic') echo 'selected'; ?>
         >italic
      </option>
      <option
         value="oblique "
         <?php if($slider_data['title_font_style'] == 'oblique') echo 'selected'; ?>
         >oblique
      </option>
   </select>
</div>
