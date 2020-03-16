<section class="uza-blog-area">
    <!-- Background Curve -->
    <div class="blog-bg-curve">
        <img src="<?php echo get_template_directory_uri() .'/assets/img/core-img/curve-4.png';?>" alt="">
    </div>

   <?php
      $blog_title = esc_attr(get_option('blog_title'));
      $blog_description = esc_attr(get_option('blog_description'));
   ?>

    <div class="container">
        <div class="row">
           <!-- Section Heading -->
           <div class="col-12">
                <div class="section-heading text-center">
                    <h2><?php echo $blog_title; ?></h2>
                    <p><?php echo $blog_description; ?></p>
                </div>
           </div>
        </div>

        <div class="row flex">
            <?php

               $blog_post = new WP_query(array(
                  'poat_type' => 'post',
                  'posts_per_page' => 3
               ));

               if ( $blog_post->have_posts() ) {
               	while ( $blog_post->have_posts() ) {
               		$blog_post->the_post();
                     ?>
                     <!-- Single Blog Post -->
                     <div class="col-12 col-lg-4 blog_item_1 flex">
                          <div class="single-blog-post bg-img mb-80">
                             <div class="single_blog_post_image">
                                <?php the_post_thumbnail(); ?>
                             </div>


                              <div class="post-content">
                                  <span class="post-date"><?php the_date(); ?></span>
                                  <a href="#" class="post-title"><?php the_title(); ?></a>
                                  <p><?php the_excerpt(); ?></p>
                                  <a href="<?php the_permalink(); ?>" class="read-more-btn">Читать<i class="arrow_carrot-2right"></i></a>
                              </div>
                          </div>
                     </div>

                     <?
                     wp_reset_postdata();
               	}
               }
            ?>

        </div>
    </div>
</section>
