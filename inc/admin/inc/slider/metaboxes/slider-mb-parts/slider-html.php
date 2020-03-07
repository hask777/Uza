
<!-- ***** Welcome Area Start ***** -->
<?php
  $slider_data = get_post_meta($post->ID, 'slider_data', true);
  $post_id = $slider_data['posts_1'];
  $post_url =  get_post_permalink($post_id);
  // pr($post_url);
?>
      <section class="welcome-area-admin">
        <div class="">
          <!-- Single Welcome Slide -->
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="./img/core-img/curve-1.png" alt="">
                </div>
                <!-- Welcome Content -->
                <div class="container">
                    <div class="row">
                        <div class="welcome_area_content col-md-12 flex">
                            <!-- Welcome Text -->
                            <div class="welcome_area_text_container col-md-6">
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
                            <div class="welcome_area_image_container col-md-6">
                                <div class="welcome_thumbnail">
                                  <?php
                                    if(get_the_post_thumbnail_url($post_id))
                                    {?>
                                      <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                    <?}else
                                    {?>
                                      <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                    <?}
                                  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
      </section>
<!-- ***** Welcome Area End ***** -->

</div></div></div></div>
