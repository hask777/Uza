<?php

function change_button_color()
{
   global $post;
   $slides = new WP_Query($args = array(
      'post_type' => 'slider'
   ));

   $ps = $slides->posts;
      foreach($ps as $slide_post)
      {
         $id = $slide_post->ID;
      }

      $slider_data = get_post_meta($id, 'slider_data', true);
      $custom_values = get_post_meta($id, 'slider_data', true);
         ?>
            <style media="screen">
               .slide{
                  color: #eee;
               }

               .slide2{
                  color: #444;
               }
               .slide3{
                  color: red;
               }
            </style>
         <?
         wp_reset_postdata();
}
add_action('wp_head', 'change_button_color');
