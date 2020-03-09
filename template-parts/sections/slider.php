
<!-- ***** Welcome Area Start ***** -->
<section class="welcome-area" >
  <div class="welcome-slides owl-carousel">
    <!-- Single Welcome Slide -->
    <?php
      $args = array(
        'post_type' => 'slider'
      );
      $slider = new WP_Query($args);

        if($slider->have_posts()):
          while( $slider->have_posts() ):
            $slider->the_post();

              $slider_data = get_post_meta($post->ID, 'slider_data', true);

              $post_id = $slider_data['posts_1'];
              $slider_button_collor =  $slider_data['color_button'];
              $slider_button_text =  $slider_data['slider_button_text'];
              $post_url =  get_post_permalink($post_id);
              // pr($slider_data);
                 // $custom_values = get_post_meta($post->ID, $slider_data['slide_class_name']); pr($custom_values);
    ?>
    <!-- Single Welcome Slide -->
      <div class="single-welcome-slide " style="background-color:<?php echo  $slider_data['color_background'];?>">
          <!-- Background Curve -->
          <div class="background-curve">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/core-img/curve-1.png'; ?>" alt="">
          </div>

          <!-- Welcome Content -->
          <div class="welcome-content h-100">
              <div class="container h-100">
                  <div class="row h-100 align-items-center">
                      <!-- Welcome Text -->
                      <div class="col-12 col-md-6">
                          <div class="welcome-text">
                             <?php $custom_values = $slider_data['slide_class_name'] ?>
                              <h2 id="post-<?php the_ID(); ?>"
                                 <?php post_class($custom_values); ?>
                                 data-animation="fadeInUp"
                                 data-delay="100ms">
                                 <?php the_title();


                                 ?>
                              </h2>
                              <h5 data-animation="fadeInUp" data-delay="400ms"><?php the_content(); ?></h5>
                              <a href="<?php echo $post_url;?>" class="btn uza-btn btn-2"
                              data-animation="fadeInUp" data-delay="700ms"><?php echo $slider_button_text; ?></a>
                          </div>
                      </div>
                      <!-- Welcome Thumbnail -->
                      <div class="col-12 col-md-6">
                          <div class="welcome-thumbnail">
                              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <?
      endwhile;
    endif;
    wp_reset_postdata();?>
  </div>
</section>
<!-- ***** Welcome Area End ***** -->
