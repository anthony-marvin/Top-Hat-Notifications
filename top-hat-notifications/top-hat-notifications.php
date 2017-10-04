<?php
/**
* Plugin Name: Top Hat Notifications
* Version: 0.01
* Author: Glacial Multimedia
* License: GPL2
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Top Hat Notifications is free software: you can redistribute it and/or modify
* it under the terms of the GNU General Public License as published by
* the Free Software Foundation, either version 2 of the License, or
* any later version.
*
* Top Hat Notifications is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
* You should have received a copy of the GNU General Public License
* along with Top Hat Notifications. If not, see {License URI}.
*/
  add_action( 'admin_init', 'thn_register_settings' );
  add_action( 'admin_menu', 'thn_settings_add_page' );

  function thn_register_settings() {
  }
  function thn_settings_add_page() {
    add_menu_page(
      'Top Hat Notification Settings', // Name of Menu item
      'Top Hat Notification Settings', // Title
      'administrator', //displays menu if user can do this.
      'thn_settings', //
      'top_hat_settings_page',
      '', // TODO add logo/icon for settings
      6 //Currently right after posts
    );
  }

  function top_hat_settings_page() {
    ?>
    <div class="wrap">
      <h2>Top Hat Notification Settings</h2>
      <div>Here you can configure the options for the Top Hat Notification System</div>
      <div class="thn-foot">Plugin built with love by <a href="http://glacial.com/" target="http://glacial.com/" rel="noopener">Glacial Multimedia</a></div>
    </div>
    <?php
  }

  function top_hat_shortcodes() {
    function top_hat_shortcode() {

    }
    add_shortcode( 'top_hat_bar', 'top_hat_shortcode' );
  }
  add_action( 'init', 'top_hat_shortcodes' );
?>
