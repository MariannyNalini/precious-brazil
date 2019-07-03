<?php
/**
Plugin Name: Custom post type sticky
Plugin URI:  https://wordpress.org/plugins/custom-post-type-sticky/
Description: This plugin Add Feature to Make custom post type sticky.
Version:     1.0
Author:      Abhay Yadav
Author URI:  http://abhayyadav.com
License:     GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'admin_enqueue_scripts', 'cpt_sticky_admin_enqueue_scripts' );
function cpt_sticky_admin_enqueue_scripts() {

	$screen = get_current_screen();

	// Only continue if this is an edit screen for a custom post type
	if ( !in_array( $screen->base, array( 'post', 'edit' ) ) || in_array( $screen->post_type, array( 'post', 'page' ) ) )
		return;

	// Editing an individual custom post
	if ( $screen->base == 'post' ) {
		$is_sticky = is_sticky();
		$js_vars = array(
			'screen' => 'post',
			'is_sticky' => $is_sticky ? 1 : 0,
			'checked_attribute' => checked( $is_sticky, true, false ),
			'label_text' => __( 'Stick this post to the front page' ),
			'sticky_visibility_text' => __( 'Public, Sticky' )
		);

	// Browsing custom posts
	} else {
		global $wpdb;

		$sticky_posts = implode( ', ', array_map( 'absint', ( array ) get_option( 'sticky_posts' ) ) );
		$sticky_count = $sticky_posts
			? $wpdb->get_var( $wpdb->prepare( "SELECT COUNT( 1 ) FROM $wpdb->posts WHERE post_type = %s AND post_status NOT IN ('trash', 'auto-draft') AND ID IN ($sticky_posts)", $screen->post_type ) )
			: 0;

		$js_vars = array(
			'screen' => 'edit',
			'post_type' => $screen->post_type,
			'status_label_text' => __( 'Status' ),
			'label_text' => __( 'Make this post sticky' ),
			'sticky_text' => __( 'Sticky' ),
			'sticky_count' => $sticky_count
		);
	}

	// Enqueue js and pass it specified variables
	wp_enqueue_script(
		'cptsticky-admin',
		plugins_url( 'admin.min.js', __FILE__ ),
		array( 'jquery' )
	);
	wp_localize_script( 'cptsticky-admin', 'sscpt', $js_vars );

}

?>
