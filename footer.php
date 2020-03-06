<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uza
 */

?>

<!-- ***** Footer Area Start ***** -->
<footer class="footer-area section-padding-80-0">
	<div class="container">
		<div class="row justify-content-between">

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-80">
					<?php
						if( is_active_sidebar('footer-1') ){
							dynamic_sidebar('footer-1');
						}
					?>
				</div>
			</div>

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-80">
					<?php
						if( is_active_sidebar('footer-2') ){
							dynamic_sidebar('footer-2');
						}
					?>
				</div>
			</div>

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-80">
					<?php
						if( is_active_sidebar('footer-3') ){
							dynamic_sidebar('footer-3');
						}
					?>
				</div>
			</div>

			<!-- Single Footer Widget -->
			<div class="col-12 col-sm-6 col-lg-3">
				<div class="single-footer-widget mb-80">
					<!-- Widget Title -->
					<?php
						if( is_active_sidebar('footer-4') ){
							dynamic_sidebar('footer-4');
						}
					?>
				</div>
			</div>

		</div>

<div class="row" style="margin-bottom: 30px;">

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
		</div>

	</div>
</footer>
<!-- ***** Footer Area End ***** -->

</body>
<?php wp_footer(); ?>
</html>
