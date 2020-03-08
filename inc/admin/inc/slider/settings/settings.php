<?php

add_action( 'admin_init', 'register_admin_slider_settings' );
function register_admin_slider_settings() {
	register_setting( 'Slider_group', 'color4');
   add_settings_section( 'slider_settings_section', 'Настроить', 'slider_settings_section_callback', 'slider' );

   add_settings_field('slider_button_text_field', 'Текст кнопки', 'button_text_field_callback', 'slider', 'slider_settings_section');

   add_settings_field('slider_button_color_field', 'Цвет кнопки', 'button_color_field_callback', 'slider', 'slider_settings_section');
}

function slider_settings_section_callback(){
   ?>Настройка элементов<?
}

function button_text_field_callback(){
   ?>
   <input type="text" name="slider_button_text" value="" placeholder="<?php echo __('Текст gкнопки', 'uza'); ?>">
   <?
}

function button_color_field_callback(){
   ?>
   <?php $color = get_option('color4');pr($color); ?>
   <input type="" name="color4" value="">
   <?
}
