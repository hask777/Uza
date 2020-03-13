<?php

function uza_header_text_weight_callback(){
   $header_text_weight = esc_attr(get_option('header_text_weight'));
   ?>
      <select class="" name="header_text_weight">
         <option value="bold" <?php echo ($header_text_weight === 'bold' ? 'selected' : ''); ?>>bold</option>
         <option value="normal" <?php echo ($header_text_weight === 'normal' ? 'selected' : ''); ?>>normal</option>
      </select>
   <?
}
