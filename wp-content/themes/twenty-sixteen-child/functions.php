<?php
/**
 * Recommended way to include parent theme styles.
 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme)
 *
 */  

add_action( 'wp_enqueue_scripts', 'twenty_sixteen_child_style' );
				function twenty_sixteen_child_style() {
					wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
					wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), rand(111,9999), 'all' );
				}

/**
 * Your code goes below.
 */
 
/* Set default avatar for new buddypress users */

define ( 'BP_AVATAR_DEFAULT', get_site_url().'/wp-content/uploads/2023/11/Default-Profile-Pic.jpg' );
define ( 'BP_AVATAR_DEFAULT_THUMB', get_site_url().'/wp-content/uploads/2023/11/Default-Profile-Pic.jpg' );

$user = wp_get_current_user();

if ( in_array( 'subscriber', (array) $user->roles ) ) {
    
add_filter( 'bp_core_fetch_avatar_no_grav', '__return_true' );

}

function yh_display_username_wp_menu( $menu_items ) {
    global $current_user;
    foreach ( $menu_items as $menu_item ) {
        if ( strpos( $menu_item->title, '{{username}}' ) !== false ) {
            // Get username, otherwise set it to blank.
            if ( $current_user->display_name ) {
                $username = $current_user->display_name;
            } else {
                $username = '';
            }
                $menu_item->title =  str_replace( '{{username}}',  $username, $menu_item->title );
        }
    }
    return $menu_items;
}
add_filter( 'wp_nav_menu_objects', 'yh_display_username_wp_menu' );