<?php

function uza_services_section_callback(){
   echo 'hi';
}

function uza_services_title_callback(){
   $service_title = esc_attr(get_option('service_title'));
   pr($service_title);
   ?>
       <input type="text" name="service_title" value="<?php echo $service_title; ?>" placeholder="Введите название секции">
   <?
}
