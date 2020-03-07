<?php

function uza_admin_metabox_init(){
    add_action('add_meta_boxes_slider', 'uza_create_metaboxes');

    function uza_create_metaboxes(){
        add_meta_box( 'uza_slider_options_mb', __('Slider Options', 'uza' ), 'uza_slider_options_mb', 'slider', 'normal', 'high');
    }

    function uza_slider_options_mb($post){

        $slider_data = get_post_meta($post->ID, 'slider_data', true);

        if(empty($slider_data)){

            $slider_data = array(
                'posts'     => '',
                'color1'    => '',
                'color2'    => '',
                'post_type' => '',
            );
        }

        ?>
        <?php
            pr($slider_data);


            $post_types = get_post_types( $args, $output, $operator );
            ?>
              <select class="" name="post_type_1">
                <?
                  foreach ( $post_types as $post_type ) {
                    $post_name = $post_type->name;
                    ?>
                      <option <?php selected( $post_type->name ); ?> value="<?php echo $post_type->name; ?>" ><?php echo $post_type->name; ?></option>
                    <?
                  }
                ?>
              </select>
            <?
             pr($slider_data['post_type_1']);

            $args = array(
                'post_type' => $slider_data['post_type_1']
            );

            $posts = new WP_Query($args);

            $posts_list =  esc_attr(get_option('posts_1'));
            // pr($posts_list);
            ?>
            <select class="" name="posts_1">
                <?php
                if($posts->have_posts()){
                    while( $posts->have_posts() ){
                        $posts->the_post();
                        ?>
                        <option  value="<?php echo get_the_ID(); ?>" <?php selected( $slider_data['posts'] ); ?>><?php the_title(); ?><?php echo $slider_data['posts'];?></option>
                        <?php //echo $slider_data['level'];?>
                        <?
                    }
                }
            ?>
            </select><br>

            <input name="color1" type="text" value="<?php echo $slider_data['color1']; ?>" /><br>
            <input name="color2" type="text" value="<?php echo $slider_data['color2']; ?>" />
            <div class="first">

            </div>
            <div class="second">

            </div>

            <style media="screen">
                .first{
                    width: 100px;
                    height: 100px;
                    background-color: <?php echo $slider_data['color1']; ?>
                }

                .second{
                    width: 100px;
                    height: 100px;
                    background-color: <?php echo $slider_data['color2']; ?>
                }
            </style>

            <!-- ***** Welcome Area Start ***** -->
                  <section class="welcome-area">
                    <div class="welcome-slides owl-carousel col-md-12">
                      <!-- Single Welcome Slide -->
                    <?

                                $slider_data = get_post_meta($post->ID, 'slider_data', true);
                                $post_id = $slider_data['posts_1'];
                                $post_url =  get_post_permalink($post_id);
                                pr($post_url);
                      ?>
                      <!-- Single Welcome Slide -->
                        <div class="single-welcome-slide col-md-4">
                            <!-- Background Curve -->
                            <div class="background-curve">
                                <img src="./img/core-img/curve-1.png" alt="">
                            </div>
                            <!-- Welcome Content -->
                            <div class="welcome-content h-100">
                                <div class="container h-100">
                                    <div class="row h-100 align-items-center">
                                        <!-- Welcome Text -->
                                        <div class="col-12 col-md-6">
                                            <div class="welcome-text">
                                                <h2 data-animation="fadeInUp" data-delay="100ms">
                                                  <?php echo  $post->post_title;?>
                                                </h2>
                                                <h5 data-animation="fadeInUp" data-delay="400ms">
                                                  <?php echo $post->post_content; ?>
                                                </h5>
                                                <a href="<?php echo $post_url;?>" class="btn uza-btn btn-2" data-animation="fadeInUp" data-delay="700ms">Start Exploring</a>
                                            </div>
                                        </div>
                                        <!-- Welcome Thumbnail -->
                                        <div class="col-12 col-md-6">
                                            <div class="welcome-thumbnail">
                                                <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                                  <img src="<?php //echo get_the_post_thumbnail_url($post->ID); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </section>


            <!-- ***** Welcome Area End ***** -->

        <?
    }
}
