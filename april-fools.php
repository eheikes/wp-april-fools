<?php
/*
Plugin Name: April Fools
Plugin URI: https://github.com/eheikes/wp-april-fools
Description: Adds evil.css on April 1
Version: 1.0.0
Author: Eric Heikes
Author URI: http://ericheikes.com
License: Apache 2.0
*/

function initAprilFools() {
  $dateInfo = getdate();
  if ($dateInfo['mon'] == 4 and $dateInfo['mday'] == 1) {
    wp_enqueue_style('aprilFools', plugins_url('evil.css', __FILE__));
  }
}
add_action('init', 'initAprilFools');

function removeAprilFools() {
  wp_dequeue_style('aprilFools');
}
add_action('admin_init', 'removeAprilFools');
