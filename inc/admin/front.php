<?php
function change_header_bgc_color()
{
   require 'front/header.php';
   require 'front/advertise.php';
   require 'front/newsletter.php';
}
add_action('wp_head', 'change_header_bgc_color');
