<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-portfolio-settings-group'); ?>
    <?php do_settings_sections('uza_portfolio_page'); ?>
    <?php submit_button(); ?>
</form>
