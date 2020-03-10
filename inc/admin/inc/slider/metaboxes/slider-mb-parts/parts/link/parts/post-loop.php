<?php
$args = array(
    'post_type' => $slider_data['post_type_1']
);

$posts = new WP_Query($args);

$posts_list =  esc_attr(get_option('posts'));
// pr($posts_list);
?>
<div class="admin_slider_button_text">
   <label for="posts"><?php echo __('Выбрать ссылку на пост', 'uza'); ?></label>
     <select class="" name="posts_1">
         <?php
         if($posts->have_posts()){
             while( $posts->have_posts() ){
                 $posts->the_post();
                 $id = get_the_ID()
                 ?>
                  <option
                     value="<?php echo $id;?>"
                     <?php if($slider_data['posts_1'] == $id) echo 'selected'; ?>
                     >
                     <?php the_title();?>
                  </option>
                 <?
                 // pr($slider_data['posts_1']);
             }
         }
     ?>
     </select>

</div>
