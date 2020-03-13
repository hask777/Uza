<section class="uza-services-area section-padding-80-0">
    <div class="container">
        <div class="row">
            <!-- Section Heading -->
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Our Services</h2>
                </div>
            </div>
        </div>

        <div class="row">
           <?php
           $args = array(
             'post_type' => 'service'
            );
            $services = new WP_Query($args);
               while($services->have_posts()){
                  $services->the_post();
                  ?>
                  <!-- Single Service Area -->
                  <div class="col-12 col-lg-4">
                      <div class="single-service-area mb-80">
                          <!-- Service Icon -->
                          <div class="service-icon">
                             <?php the_post_thumbnail(); ?>
                              <!-- <i class="icon_cone_alt"></i> -->
                          </div>
                          <h5><?php the_title() ?></h5>
                          <p><?php the_excerpt() ?></p>
                      </div>
                  </div>
                  <?
               }
           ?>

        </div>
    </div>
</section>
