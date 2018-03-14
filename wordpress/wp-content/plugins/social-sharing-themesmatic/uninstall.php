<?php
/*
* Uninstalls Social Sharing Buttons by ThemesMatic when uninstall
* has been requested by WordPress only
*/

// Exit if uninstall/delete is not called from WordPress
if( ! defined ( 'ABSPATH' ) && ! defined ( 'WP_UNINSTALL_PLUGIN' ) )
	exit;

global $wpdb;

if( is_multisite() ){
	
	$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
	
	if( $blog_ids ){

		foreach( $blog_ids as $id ) {
			switch_to_blog( $id );
			
			//deletes option for multisite
			delete_site_option( 'themesmatic_sharing_options' );
			
			// restores previous blog after 'switch_to_blog()' call
			restore_current_blog();
		}

	}
	
} else {
		
//deletes option for single site
delete_option( 'themesmatic_sharing_options' );

}