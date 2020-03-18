<?php
$portfolio_tabs = get_terms('portfolio_cat');
// pr($portfolio_tabs);
   foreach($portfolio_tabs as $port_cat):
      $args = array(
         'post_type' => 'portfolio',
         // 'posts_per_page' => 10,
         'portfolio_cat' => $port_cat->slug,
      );
      $all = new WP_Query($args);
      // pr($design);
      if($all->have_posts()){
         while( $all->have_posts() ){
            $all->the_post();
            ?>
            <!-- Single Portfolio Item -->
               <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item flex port_item <?php echo $port_cat->slug; ?>">
                  <div class="single-portfolio-slide">
                        <?php the_post_thumbnail(); ?>
                        <!-- Overlay Effect -->
                        <div class="overlay-effect">
                            <h4><?php the_title(); ?></h4>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <!-- View More -->
                        <div class="view-more-btn">
                            <a href="<?php the_permalink();?>"><i class="arrow_right"></i></a>
                        </div>
                  </div>
               </div>
            <?
         }
      }
      wp_reset_postdata();
   endforeach;
?>
