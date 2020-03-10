<?php

function change_button_color()
{

   $slides = new WP_Query($args = array(
      'post_type' => 'slider'
   ));


      while($slides->have_posts()){
         $slides->the_post();
         $id = $slides->post->ID;

      }
      $slider_data = get_post_meta($id, 'slider_data', true);
      // pr($slider_data);


         ?>
            <style media="screen">
         
            </style>
         <?
         wp_reset_postdata();
}
add_action('wp_head', 'change_button_color');
