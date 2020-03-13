<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-service-settings-group'); ?>
    <?php do_settings_sections('uza_service_page'); ?>
    <?php submit_button(); ?>
</form>
