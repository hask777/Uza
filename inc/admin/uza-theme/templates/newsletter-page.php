<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-newsletter-settings-group'); ?>
    <?php do_settings_sections('uza_newsletter_page'); ?>
    <?php submit_button(); ?>
</form>
