<?php
function change_header_bgc_color()
{
   $header_color = esc_attr(get_option('color_header_1'));
   // pr($header_color);
   ?>
      <style media="screen">
         .header-area{
            background-color: <?php echo $header_color; ?>
         }
      </style>
   <?
}
add_action('wp_head', 'change_header_bgc_color');
