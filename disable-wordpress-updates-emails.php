<?php
   /*
   Plugin Name: Disable WordPress Updates Emails
   Plugin URI: https://github.com/quicoto/disable-wordpress-updates-emails
   Description: Disables the default notification email sent by WordPress for automatic plugin updates, regardless of outcome (success or failure).
   Version: 1.0.0
   Author: Ricard Torres
   Author URI: https://ricard.dev
   License: GPL3
   */

add_filter( 'auto_plugin_update_send_email', '__return_false' );

