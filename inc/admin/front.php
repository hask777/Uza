<?php
function change_header_bgc_color()
{
   $options = get_option('header_bgc_init');
   $header_image = esc_attr(get_option('header_picture'));
   $header_color = esc_attr(get_option('color_header_1'));
   $header_sticky_color = esc_attr(get_option('color_header_sticky'));
   $header_text_color = esc_attr(get_option('color_header_text'));
   $header_text_size = esc_attr(get_option('header_text_size'));
   $header_logo_color = esc_attr(get_option('color_header_logo'));
   $header_logo_size = esc_attr(get_option('header_logo_size'));
   $header_button_trigger = get_option('header_button_trigger');
   // pr($header_color);

   if(@$options['transparent'] != 1){
   ?>
      <style media="screen">
         .header-area{
            background-color: <?php echo $header_color; ?>
         }
      </style>
   <?
   }

   if(@$options['sticky'] != 1){
   ?>
      <style media="screen">
         .header-area .main-header-area.sticky {
            opacity: 0;
         }
      </style>
   <?
   }

   if(@$header_sticky_color){
   ?>
      <style media="screen">
         .header-area .main-header-area.sticky {
            background-color: <?php echo $header_sticky_color; ?>
         }
      </style>
   <?
   }

   if(@$header_image){
   ?>
      <style media="screen">
         .header-area{
            background-image: url(<?php echo $header_image; ?>);
            background-repeat: no-repeat;
         }
      </style>
   <?}

   if(@$header_text_color){
      ?>
         <style media="screen">
            .classy-nav-container .classy-navbar .classynav ul li a{
               color: <?php echo $header_text_color; ?>;
            }
         </style>
      <?
   }

   if(@$header_text_size){
      ?>
         <style media="screen">
            .classy-nav-container .classy-navbar .classynav ul li a{
               font-size: <?php echo $header_text_size; ?>;
            }
         </style>
      <?
   }

   if(@$header_logo_color){
      ?>
         <style media="screen">
            .classy-nav-container .classy-navbar .site-title a{
               color: <?php echo $header_logo_color; ?>;
            }
         </style>
      <?
   }

   if(@$header_logo_size){
      ?>
         <style media="screen">
            .classy-nav-container .classy-navbar .site-title a{
               font-size: <?php echo $header_logo_size; ?>;

            }
         </style>
      <?
   }

   if(@$header_button_trigger['show'] != 1){
      ?>
         <style media="screen">
            .get-a-quote{
               display: none;
            }
         </style>
      <?
   }

}
add_action('wp_head', 'change_header_bgc_color');
