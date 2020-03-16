<?php
   $newsletter_title = esc_attr(get_option('newsletter_title'));
   $newsletter_description = esc_attr(get_option('newsletter_description'));
?>
<!-- ***** Newsletter Area Start ***** -->
<section class="uza-newsletter-area" style="margin-top: 250px">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <!-- Newsletter Content -->
            <div class="col-12 col-md-6 col-lg-6">
                <div class="nl-content mb-80">
                    <h2><?php echo $newsletter_title; ?></h2>
                    <p><?php echo $newsletter_description; ?></p>
                </div>
            </div>
            <!-- Newsletter Form -->
            <div class="col-12 col-md-6 col-lg-5">
                <div class="nl-form mb-80">

                        <?php echo do_shortcode('[contact-form-7 id="115" title="Contact form 1" "email"]'); ?>


                </div>
            </div>
        </div>
        <!-- Border Bottom -->
        <div class="border-line"></div>
    </div>
</section>
<!-- ***** Newsletter Area End ***** -->
