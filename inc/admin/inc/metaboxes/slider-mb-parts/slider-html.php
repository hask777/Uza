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
        </div>
      </section>
<!-- ***** Welcome Area End ***** -->
