<?php
// TITLE
$newsletter_title = esc_attr(get_option('newsletter_title'));
$newsletter_title_color = esc_attr(get_option('color_newsletter_title'));
$newsletter_title_size = esc_attr(get_option('newsletter_title_size'));
$newsletter_title_style = esc_attr(get_option('newsletter_title_style'));
$newsletter_title_weight = esc_attr(get_option('newsletter_title_weight'));
// DESCRIPTION
$newsletter_description = esc_attr(get_option('newsletter_description'));
$color_newsletter_description = esc_attr(get_option('color_newsletter_description'));
$newsletter_description_size = esc_attr(get_option('newsletter_description_size'));
$newsletter_description_style = esc_attr(get_option('newsletter_description_style'));
$newsletter_description_weight = esc_attr(get_option('newsletter_description_weight'));
// FORM INPUT
$color_newsletter_input = esc_attr(get_option('color_newsletter_input'));
$newsletter_input_width = esc_attr(get_option('newsletter_input_width'));
$newsletter_input_height = esc_attr(get_option('newsletter_input_height'));
$newsletter_input_border = esc_attr(get_option('newsletter_input_border'));
$newsletter_input_border_radius = esc_attr(get_option('newsletter_input_border_radius'));
$newsletter_input_font_color = esc_attr(get_option('color_newsletter_input_font'));
$newsletter_input_font_size = esc_attr(get_option('newsletter_input_font_size'));
$newsletter_input_font_style = esc_attr(get_option('newsletter_input_font_style'));
$newsletter_input_font_weight = esc_attr(get_option('newsletter_input_font_weight'));
$newsletter_input_padding = esc_attr(get_option('newsletter_input_padding'));
// FORM BUTTON
$color_newsletter_button = esc_attr(get_option('color_newsletter_button'));
$newsletter_button_width = esc_attr(get_option('newsletter_button_width'));
$newsletter_button_height = esc_attr(get_option('newsletter_button_height'));
$newsletter_button_font_size = esc_attr(get_option('newsletter_button_font_size'));
$color_newsletter_button_font = esc_attr(get_option('color_newsletter_button_font'));
$newsletter_button_font_style = esc_attr(get_option('newsletter_button_font_style'));
$newsletter_button_font_weight = esc_attr(get_option('newsletter_button_font_weight'));
$newsletter_button_border_radius = esc_attr(get_option('newsletter_button_border_radius'));
$newsletter_button_border_radius = esc_attr(get_option('newsletter_button_border_radius'));
$color_bgc_newsletter_button = esc_attr(get_option('newsletter_button_border_radius'));
$newsletter_button_padding = esc_attr(get_option('newsletter_button_padding'));


?>
   <style media="screen">
      /* FORM TITLE */
      .uza-newsletter-area .nl-content h2 {
         color: <?php echo $newsletter_title_color; ?>;
         font-size: <?php echo $newsletter_title_size; ?>;
         font-style: <?php echo $newsletter_title_style; ?>;
         font-weight: <?php echo $newsletter_title_weight; ?>;
      }
      /* FORM DESCRIPTION */
      .uza-newsletter-area .nl-content p{
         color: <?php echo $color_newsletter_description; ?>;
         font-size: <?php echo $newsletter_description_size; ?>;
         font-style: <?php echo $newsletter_description_style; ?>;
         font-weight: <?php echo $newsletter_description_weight; ?>;
      }
      /* FORM INPUT */
      .uza-newsletter-area .nl-form form input[type="email"]{
         background-color: <?php echo $color_newsletter_input; ?>;
         width: <?php echo $newsletter_input_width; ?>;
         height: <?php echo $newsletter_input_height; ?>;
         border: <?php echo $newsletter_input_border; ?>;
         border-radius: <?php echo $newsletter_input_border_radius; ?>;
         color: <?php echo $newsletter_input_font_color; ?>;
         font-size: <?php echo $newsletter_input_font_size; ?>;
         font-style: <?php echo $newsletter_input_font_style; ?>;
         font-weight: <?php echo $newsletter_input_font_weight; ?>;
         padding: <?php echo $newsletter_input_padding; ?>;
      }
      /* FORM BUTON */
      .uza-newsletter-area .nl-form form button, input[type="submit"]{
         background-color: <?php echo $color_newsletter_button; ?>;
         width: <?php echo $newsletter_button_width; ?>;button
         height: <?php echo $newsletter_button_height; ?>;
         border: <?php echo $newsletter_button_border; ?>;
         border-radius: <?php echo $newsletter_button_border_radius; ?>;
         color: <?php echo $newsletter_button_font_color; ?>;
         font-size: <?php echo $newsletter_button_font_size; ?>;
         font-style: <?php echo $newsletter_button_font_style; ?>;
         font-weight: <?php echo $newsletter_button_font_weight; ?>;
         padding: <?php echo $newsletter_button_padding; ?>;
      }
   </style>
<?
