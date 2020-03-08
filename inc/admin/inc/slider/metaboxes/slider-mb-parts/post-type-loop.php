<?php

// pr($slider_data);
$post_types = get_post_types( $args, $output, $operator );
?>
<div class="container slider_wrapper">
   <div class="row">
      <div class="col-md-12 flex">
         <div class="col-md-6">
            <div class="admin_slider_post_select">
               <label for="post_type_1"><?php echo __('Выбрать тип поста', 'uza'); ?></label>
               <select class="" name="post_type_1">
                   <?
                     foreach ( $post_types as $post_type ){
                       $post_name = $post_type->name;
                       ?>
                        <option
                          value="<?php echo $post_name; ?>"
                          <?php if($slider_data['post_type_1'] === $post_name) echo 'selected';?>
                          >
                          <?php echo $post_name;?>
                        </option>
                       <?
                     }
                   ?>
               </select>
            </div>

            <?
 // pr($slider_data['post_type_1']);
