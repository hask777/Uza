<h1>Uza Options</h1>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-settings-group'); ?>
    <?php do_settings_sections('uza_main_page'); ?>
    <?php submit_button(); ?>
</form>
