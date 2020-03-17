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
   //pr($type);

}

// POSTS TYPES
function uza_services_post_types_callback(){
   $post_types = get_post_types();
   $types_array = array();
   foreach($post_types as $post_type){
      // echo $post_type;
      $types_array[] = $post_type;
   }
   //pr($types_array);

   $service_post_type = get_option('services_post_types');
   pr($service_post_type);
   foreach($service_post_type as $s_type){
      pr($s_type);
   }


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
function uza_services_terms_callback(){
    $terms = get_terms();
    $termslist =  esc_attr(get_option('services_terms_list'));

    pr($termslist);

    ?>
        <select class=""  name="services_terms_list" >
        <?
            foreach($terms as $term):
            $slug = $term->slug;
            ?>
                <option value="<?php echo $slug; ?>"><?php echo $term->name; ?></option>
            <? endforeach; ?>
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
    ?>
        <?php $posts_list =  esc_attr(get_option('service_posts_list'));
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
