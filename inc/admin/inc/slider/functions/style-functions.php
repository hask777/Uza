<?php

function change_button_color()
{
   $slides = new WP_Query($args = array(
      'post_type' => 'slider'
   ));
   $ps = $slides->posts;
   // pr($ps);

   foreach($ps as $post){
      $id = $post->ID;
      $slider_data = get_post_meta($id, 'slider_data', true);
      $colors = array();
      $colors['slide'] = $slider_data['color_button'];
      pr(gettype($colors));
      foreach($colors as $color){
         pr($color);
      }

         ?>
            <style media="screen">
            .single-welcome-slide .welcome-text h2 {
                  color: <?php echo $color; ?>;
                  font-size: 62px;
               }
            </style>
         <?
   }

}
add_action('wp_head', 'change_button_color'); ?>
