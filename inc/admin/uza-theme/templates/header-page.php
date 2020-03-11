<h1>Header</h1>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-header-settings-group'); ?>
    <?php do_settings_sections('uza_header_page'); ?>
    <?php submit_button(); ?>
</form>
