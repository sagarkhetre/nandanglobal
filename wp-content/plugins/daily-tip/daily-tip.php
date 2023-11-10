<?php
/*
Plugin Name: Daily Tip
Description: Daily Tip
Author: Sagar Khetre
*/

// Create a new table
function daily_tip(){

  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();

  $tablename = $wpdb->prefix."dailytip";

  $sql = "CREATE TABLE $tablename (
  id mediumint(11) NOT NULL AUTO_INCREMENT,
  tip varchar(200) NOT NULL,
  PRIMARY KEY  (id)
  ) $charset_collate;";

  require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
  dbDelta( $sql );

}
register_activation_hook( __FILE__, 'daily_tip' );

// Add menu
function dailytip_menu() {

    add_menu_page("Daily Tip", "Daily Tip","manage_options", "myplugin", "displayList",plugins_url('/daily-tip/img/icon.png'));
    add_submenu_page("myplugin","All Tips", "All entries","manage_options", "allentries", "displayList");
    add_submenu_page("myplugin","Add new Entry", "Add new Entry","manage_options", "addnewentry", "addEntry");

}
add_action("admin_menu", "dailytip_menu");

function displayList(){
  include "displaytip.php";
}

function addEntry(){
  include "addentry.php";
}

// Function to add subscribe text to posts and pages
  function display_tip_shortcode() {

			global $wpdb;
			$table_name = "wp_dailytip";
            $results = $wpdb->get_results( "SELECT * FROM $table_name ORDER BY id DESC LIMIT 1");
            return $tip = $results[0]->tip;
}
add_shortcode('tip', 'display_tip_shortcode');

