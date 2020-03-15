<?php

function uza_blog_section_callback(){
   echo "Настроить секцию блога";
}

function uza_blog_title_callback(){
   $blog_title = esc_attr(get_option('blog_title'));
   ?>
      <input type="text" name="blog_title" value="<?php echo $blog_title; ?>" placeholder="<?php echo __('Текст заголовка', 'uza'); ?>">
   <?
}

function uza_blog_description_callback(){
   $blog_description = esc_attr(get_option('blog_description'));
   ?>
      <textarea name="blog_description" rows="8" cols="80"><?php echo $blog_description; ?></textarea>
   <?
}
