<h1>Реклама</h1>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-advertising-settings-group'); ?>
    <?php do_settings_sections('uza_advertising_page'); ?>
    <?php submit_button(); ?>
</form>
