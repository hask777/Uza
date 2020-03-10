<!-- Background Color -->
<div class="trigger">
   <span><?php echo __('Цвет фона', 'uza'); ?></span>
</div>
<div class="admin_slider_button_text_div">
   <div class="admin_slider_button_text">
      <?php include 'parts/bgc-color.php'; ?>
   </div>
</div>
<div class="">
   <!-- Button -->
   <style media="screen">
      .welcome-area-admin
      .welcome_area_content
      .welcome_area_text_container
      .welcome_text
      .btn-2 {
         background-color: <?php echo $button_collor; ?>;
         color: #ffffff;
      }
   </style>
   <!-- Background -->
   <style media="screen">
      .welcome-area-admin
      .admin_slider_bgc
      {
         background-color: <?php echo $slider_data['color_background']; ?>;
         opacity: 0.5;
      }
   </style>
</div>
