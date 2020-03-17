<?php

function uza_services_section_callback(){
   echo 'hi';

}

function uza_services_title_callback(){
   $service_title = esc_attr(get_option('service_title'));
   // pr($service_title);
   ?>
       <input type="text" name="service_title" value="<?php echo $service_title; ?>" placeholder="Введите название секции">
   <?
}

function uza_services_post_types_calback($type){
   return $type;
}
// POSTS TYPES
function uza_services_post_types_callback(){
   $post_types = get_post_types();
   $types_array = array();

   foreach($post_types as $post_type){
      $types_array[] = $post_type;
   }

   $service_post_type = get_option('services_post_types');
   ?>
       <select class="" name="services_post_types[]" multiple>
         <?
         foreach($types_array as $type){
            pr($type);
            ?>
                <option value="<?php echo $type;?>" <?php echo ($service_post_type == $type ?  'selected' : ''); ?>><?php echo $type; ?></option>
            <?
         }?>
       </select>
   <?
}

// TERMS
function uza_services_post_terms_calback($term_type){
   return $term_type;
}

function uza_services_terms_callback(){
   $terms = get_terms();
   $terms_list = array();
   $terms_list =  get_option('services_terms_list');
   ?>
      <select class=""  name="services_terms_list[]" multiple>
      <?
         foreach($terms as $term):

               echo '<option value="'. $term->term_id . '">'.$term->name.'</option>';

         endforeach; ?>
      </select>
   <?
}

// POSTS
function uza_services_posts_callback(){
      $service_post_type = esc_attr(get_option('services_post_types'));
      $args = array(
         'post_type' =>$service_post_type
      );

      $posts = new WP_Query($args);

      $posts_list =  esc_attr(get_option('service_posts_list'));
        // pr($posts_list);
      ?>
        <select class="" name="service_posts_list">
            <?php
            if($posts->have_posts()){
                while( $posts->have_posts() ){
                    $posts->the_post();
                    ?>
                    <option value="<?php echo get_the_ID(); ?>"><?php the_title(); ?></option>
                    <?
                }
            }?>
        </select>
    <?
}
