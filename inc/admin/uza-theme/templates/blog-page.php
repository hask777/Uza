<h1>Blog</h1>
<?php settings_errors(); ?>
<form class="" action="options.php" method="post">
    <?php settings_fields('uza-blog-settings-group'); ?>
    <?php do_settings_sections('uza_blog_page'); ?>
    <?php submit_button(); ?>
</form>
