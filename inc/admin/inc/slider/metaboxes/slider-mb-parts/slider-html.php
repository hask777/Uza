<div class="col-md-6">
<!-- ***** Welcome Area Start ***** -->
<?php
   $slider_data = get_post_meta($post->ID, 'slider_data', true);
   $post_id = $slider_data['posts_1'];
   $button_text = $slider_data['slider_button_text'];
   $slider_button_collor =  $slider_data['color_button'];
   $slider_button_text_color = $slider_data['color_slider_button_text'];
   $post_url =  get_post_permalink($post_id);
  // pr($post_url);
?>
   <section class="welcome-area-admin flex align_vertical align_horizontal">
         <div class="admin_slider_bgc">

         </div>
        <div class="welcome_area_admin_container">
          <!-- Single Welcome Slide -->
                <!-- Background Curve -->
                <div class="background-curve">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/core-img/curve-1.png';?>" alt="">
                </div>

                <!-- Welcome Content -->
                <div class="container">
                    <div class="row">
                        <div class="welcome_area_content col-md-12 flex">
                            <!-- Welcome Text -->
                            <div class="welcome_area_text_container col-md-6">
                                <div class="welcome_text">
                                    <h3 class="welcom_text_title" data-animation="fadeInUp" data-delay="100ms"
                                    style="
                                      color:<?php echo $slider_data['color_title']; ?>;
                                      font-style:<?php echo $slider_data['title_font_style']; ?>;
                                      font-weight:<?php echo $slider_data['title_font_weight']; ?>;
                                    "
                                    >
                                      <?php echo  $post->post_title;?>
                                   </h3>
                                    <h5 data-animation="fadeInUp" data-delay="400ms"
                                    style="
                                       color:<?php echo   $slider_data['color_description']; ?>;
                                       font-style:<?php echo $slider_data['desc_font_style']; ?>;
                                       font-weight:<?php echo $slider_data['desc_font_weight']; ?>;">
                                      <?php echo $post->post_content; ?>
                                    </h5>
                                    <a href="<?php echo $post_url;?>"
                                       style="
                                        background-color: <?php echo $slider_button_collor; ?>;
                                        color: <?php echo $slider_button_text_color;?>;
                                       "
                                       class="btn uza-btn btn-2 " data-animation="fadeInUp" data-delay="700ms"><span>
                                       <?php echo $button_text; ?></span></a>
                                </div>
                            </div>
                            <!-- Welcome Thumbnail -->
                            <div class="welcome_area_image_container col-md-6">
                                <div class="welcome_thumbnail flex align_vertical align_horizontal">
                                  <?php
                                    if(get_the_post_thumbnail_url($post->ID))
                                    {?>
                                      <img src="<?php echo get_the_post_thumbnail_url($post->ID); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
                                    <?}else
                                    {?>
                                      <img src="<?php echo get_the_post_thumbnail_url($post_id); ?>" alt="" data-animation="slideInRight" data-delay="400ms">
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

</div>
