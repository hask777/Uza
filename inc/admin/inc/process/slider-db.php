<?php

function create_slider_table(){
  global $wpdb;
  $createSQl = 'CREATE TABLE `'. $wpdb->prefix .'slider_ratings` (
                	`ID` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
                	`slide_id` BIGINT(20) UNSIGNED NOT NULL,
                	`slide_link` VARCHAR(50) NOT NULL,
                	`slide_post_type` VARCHAR(50) NOT NULL,
                	PRIMARY KEY (`ID`)
                )
                ENGINE=InnoDB'. $wpdb->get_charset_collate() .'AUTO_INCREMENT=1;';

  require_once (ABSPATH . '/wp-admin/includes/upgrade.php');
  dbDelta($createSQl);
}
