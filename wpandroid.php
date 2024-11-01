<?php
/* 
Plugin Name: WP ANDROID
Plugin URI: http://www.wpandroid.com/
Version: v1.00
Author: droidgenerator
Description: Create Android Apps via your Wordpress Admin Dashboard. No Coding Required.
*/

 

add_action('admin_menu', 'wpandroid_menu');

function wpandroid_menu() {

  add_options_page('wpandroid Options', '|:: WP ANDROID ::|', 'manage_options', 'my-unique-identifier', 'wpandroid_options');

}

function wpandroid_options() {

  if (!current_user_can('manage_options'))  {
    wp_die( __('You do not have sufficient permissions to access this page.') );
  }

  echo '<div class="wrap">';
  echo "<p><iframe src=\"http://www.wpandroid.com/\" name=\"frame1\" scrolling=\"yes\" frameborder=\"no\" align=\"center\" height = \"1050px\" width = \"950px\"></iframe></p>";
  echo '</div>';

}

?>