<?php
$args = array(
    'post_type' => $slider_data['post_type_1']
);

$posts = new WP_Query($args);

$posts_list =  esc_attr(get_option('posts'));
// pr($posts_list);
?>
  <select class="" name="posts">
      <?php
      if($posts->have_posts()){
          while( $posts->have_posts() ){
              $posts->the_post();
              ?>
                <option  value="<?php echo get_the_ID();?>"><?php the_title();?></option>
              <?
          }
      }
  ?>
  </select><br>
