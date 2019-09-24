<?php

/**
 * Plugin Name: Change First Name as default to display
 * Description: Change First Name as default to display
 * Version: 1.0
 * Author: Papp Zoltán
 * License: GPL2
 */

/* Change First Name as default to display */

function change_display_name( $user_id ) {
  $info = get_userdata( $user_id );
  $args = array(
  'ID' => $user_id,
  'display_name' => $info->first_name 
  );
  wp_update_user( $args );
  }
  add_action('user_register','change_display_name');