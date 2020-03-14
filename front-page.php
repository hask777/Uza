<?php get_header('uza'); ?>

<?php get_template_part('template-parts/sections/slider'); ?>

<!-- ***** About Us Area Start ***** -->
<!-- <?php //get_template_part('template-parts/sections/about'); ?>     -->
<!-- ***** About Us Area End ***** -->

<!-- ***** Services Area Start ***** -->
<?php get_template_part('template-parts/sections/services'); ?>
<!-- ***** Services Area End ***** -->

<!-- ***** Portfolio Area Start ***** -->
<!-- <?php //get_template_part('template-parts/sections/portfolio_slider'); ?> -->
<?php get_template_part('template-parts/sections/portfolio_ajax'); ?>
<!-- ***** Portfolio Area End ***** -->

<!-- CTA Area Start -->
<?php get_template_part('template-parts/sections/advertise'); ?>
<!-- CTA Area End -->

<!-- ***** Blog Area Start ***** -->
<?php get_template_part('template-parts/sections/blog'); ?>
<!-- ***** Blog Area End ***** -->

<!-- ***** Newsletter Area Start ***** -->
<?php get_template_part('template-parts/sections/newsletter'); ?>
<!-- ***** Newsletter Area End ***** -->

<?php get_footer(); ?>
