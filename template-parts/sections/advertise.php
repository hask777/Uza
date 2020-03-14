<!-- CTA Area Start -->
<?php
   $advertis_bgc = esc_attr(get_option('color_advertis_bgc'));
   $advertis_image = esc_attr(get_option('advertis_image'));

?>
<section class="advertis_section">
   <div class="uza-cta-area section-padding-0-80">
   <div class="advertis_bgc_image">
      <img src="<?php echo $advertis_image; ?>" alt="" >
   </div>
   <div class="advertis_bgc">

   </div>

       <div class="container">
         <div class="row align-items-center">
              <div class="col-12 col-lg-6">
                   <div class="cta-content mb-80">
                       <h2><?php echo $advertis_title = esc_attr(get_option('advertis_title')); ?></h2>
                       <h6><?php echo $advertis_description =  esc_attr(get_option('advertis_description')); ?></h6>
                   </div>
              </div>

              <div class="col-12 col-lg-6">
                   <div class="cta-content mb-80">
                       <div class="call-now-btn">
                          <a href="#"><span><?php echo $add_text = esc_attr(get_option('advertis_phone_text')); ?></span><?php echo $phone_number = esc_attr(get_option('advertis_phone_number')); ?></a>
                       </div>
                   </div>
              </div>
         </div>
       </div>
   </div>
</section>

<!-- CTA Area End -->
