<?php




function change_button_color()
{
   $slides = new WP_Query($args = array(
      'post_type' => 'slider'
   ));

   while($slides->have_posts()){
      $slides->the_post();
      $id = get_the_ID();
      $slider_data = get_post_meta($id, 'slider_data', true);
      $colors = $slider_data['color_button'];
      pr(gettype($slider_data['color_button']));

      ?>
         <style media="screen">
            .single-welcome-slide .welcome-text h2{
               color: <?php echo $slider_data['color_button']; ?>;
               font-size: 82px;
            }
         </style>
      <?
   }
}
add_action('wp_head', 'change_button_color'); ?>
