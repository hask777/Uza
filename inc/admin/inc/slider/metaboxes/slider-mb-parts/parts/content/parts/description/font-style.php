<div class="admin_slider_setting_div">
   <label for="desc_font_style"><?php echo __('Задать Стиль Текста'); ?></label>
   <select class="" name="desc_font_style">
      <option
         value="normal"
         <?php if($slider_data['desc_font_style'] == 'normal') echo 'selected'; ?>
         >normal
      </option>
      <option
         value="italic"
         <?php if($slider_data['desc_font_style'] == 'italic') echo 'selected'; ?>
         >italic
      </option>
      <option
         value="oblique "
         <?php if($slider_data['desc_font_style'] == 'oblique') echo 'selected'; ?>
         >oblique
      </option>
   </select>
</div>
