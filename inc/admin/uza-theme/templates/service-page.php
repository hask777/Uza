<h2>Services</h2>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-services-settings-group'); ?>
    <?php do_settings_sections('uza_services_page'); ?>
    <?php submit_button(); ?>
</form>
