<section class="uza-portfolio-area section-padding-80">
   <?php get_template_part('template-parts/sections/portfolio/heading'); ?>

    <!-- Portfolio Menu -->

    <div class="portfolio-menu text-center mb-80">
        <button class="btn active" data-filter="*">All Portfolio</button>
        <?php
           $portfolio_tabs = get_terms('portfolio_cat');
           // pr($portfolio_tabs);
                foreach($portfolio_tabs as $port_cat):
                    ?>
                        <button class="btn" data-filter="<?php echo '.' . $port_cat->slug; ?>"><?php echo $port_cat->name; ?></button>
                    <?
                endforeach;
        ?>
    </div>

    <div class="container-fluid">
        <div class="row uza-portfolio flex">

           <!-- Single Portfolio Item -->
           <?php
           $portfolio_cats = get_terms('portfolio_cat');
           foreach($portfolio_cats as $port_cat):

                $args = array(
                    'posts_per_page' => 2,
                    'post_type' => 'portfolio',
                    'portfolio_cat' => $port_cat->slug,

                );
                $all = new WP_Query($args);
                // pr($design);

                if($all->have_posts()){
                    while( $all->have_posts() ){
                        $all->the_post();
                        ?>
                        <!-- Single Portfolio Item -->
                           <div class="col-12 col-sm-6 col-lg-4 col-xl-3 single-portfolio-item flex <?php echo $port_cat->slug; ?>">
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
                }else{
                    ?>
                        <p>No Posts</p>
                    <?
                }wp_reset_postdata();
           endforeach; ?>
        </div>


    </div>
    <div class="row">
        <div class="col-12 text-center mt-30">
           <a href="#" id="load_more_btn" class="btn uza-btn btn-3">Load More</a>
        </div>
    </div>
</section>
