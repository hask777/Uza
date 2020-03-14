<?php

$options = get_option('header_bgc_init');
$header_image = esc_attr(get_option('header_picture'));
$header_color = esc_attr(get_option('color_header_1'));
$header_sticky_color = esc_attr(get_option('color_header_sticky'));
$header_text_color = esc_attr(get_option('color_header_text'));
$header_text_size = esc_attr(get_option('header_text_size'));
$header_logo_color = esc_attr(get_option('color_header_logo'));
$header_logo_size = esc_attr(get_option('header_logo_size'));
$header_button_trigger = get_option('header_button_trigger');
$header_text_weight = esc_attr(get_option('header_text_weight'));

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

if(@$options['auth'] != 1){
?>
   <style media="screen">
      .login-register-btn {
         display: none;
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
         .header-area .search-icon i{
            color: <?php echo $header_text_color; ?>;
         }
         .classynav ul li.has-down > a::after, .classynav ul li.has-down.active > a::after, .classynav ul li.megamenu-item > a::after{
            color: <?php echo $header_text_color; ?>;
         }
         .classy-nav-container .classy-navbar .classynav ul li.current-item a::after {
            background-color: <?php echo $header_text_color; ?>;
         }
      </style>
   <?
}


if(@$header_text_weight){
   ?>
      <style media="screen">
         .classy-nav-container .classy-navbar .classynav ul li a{
            font-weight: <?php echo $header_text_weight; ?>;
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

$dropdown_color = esc_attr(get_option('color_header_dropdown_bgc'));
$dropdown_text = esc_attr(get_option('color_header_dropdown_text'));

if(@$dropdown_color){
   ?>
      <style media="screen">
         .breakpoint-off .classynav ul li .dropdown{
            background-color: <?php echo  $dropdown_color;?>;
         }
      </style>
   <?
}


   if(@$dropdown_text){
      ?>
         <style media="screen">
            .classy-nav-container .classy-navbar .classynav .dropdown li a  {
               color: <?php echo  $dropdown_text;?>;
            }
         </style>
      <?
   }
