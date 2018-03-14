<?php
	
/*
Plugin Name: Social Sharing Buttons by ThemesMatic
Plugin URI: https://www/themesmatic.com/plugins/social-sharing-buttons-wordpress-plugin
Description: Seamless social sharing buttons plugin. Adds social media sharing options to the WordPress Theme Customizer. Choose your buttons and custom text. Display sharing buttons before of after your content. Looks awesome on all themes... but even better on ThemesMatic themes. 
Version: 1.0
Author: ThemesMatic
Author URI: https://www.themesmatic.com
License: GPLv3
License URI: https://opensource.org/licenses/GPL-3.0
Text Domain: themesmatic-social
*/

register_activation_hook( __FILE__, 'themesmatic_setup_options');

// creates plugin option
 if ( ! function_exists( 'themesmatic_setup_sharing_options' ) ) {
	function themesmatic_setup_sharing_options() {
		add_option( 'themesmatic_sharing_options', 77 );
	}
}
// include social sharing settings and controls
include "social-list.php";

// creates options array
$social_options = array(
	'themesmatic_social_sharing_buttons' => intval( get_theme_mod('themesmatic_social_sharing_buttons') ),
	'themesmatic_social_icon_one' => esc_attr( get_theme_mod('themesmatic_social_icon_one') ),
	'themesmatic_social_icon_two' => esc_attr( get_theme_mod('themesmatic_social_icon_two', 'twitter') ),
	'themesmatic_social_icon_three' => esc_attr( get_theme_mod('themesmatic_social_icon_three') ),
	'themesmatic_social_icon_four' => esc_attr( get_theme_mod('themesmatic_social_icon_four') ),
	'themesmatic_social_icon_five' => esc_attr( get_theme_mod('themesmatic_social_icon_five') ),
	'themesmatic_social_icon_six' => esc_attr( get_theme_mod('themesmatic_social_icon_six') ),
	'themesmatic_social_icon_seven' => esc_attr( get_theme_mod('themesmatic_social_icon_seven') ),
	'themesmatic_social_icon_eight' => esc_attr( get_theme_mod('themesmatic_social_icon_eight') ),
	'themesmatic_social_icon_nine' => esc_attr( get_theme_mod('themesmatic_social_icon_nine') ),
	'themesmatic_social_icon_ten' => esc_attr( get_theme_mod('themesmatic_social_icon_ten') ),
	'themesmatic_social_icon_eleven' => esc_attr( get_theme_mod('themesmatic_social_icon_eleven') ),
	'themesmatic_social_sharing_position' => wp_kses( get_theme_mod('themesmatic_social_sharing_position'), array('sharing-before','sharing-after') ),
	'themesmatic_social_sharing_colors' => wp_kses( get_theme_mod('themesmatic_social_sharing_colors'), array('sharing-bw','sharing-color') ),
	'themesmatic_social_heading' => esc_html( get_theme_mod('themesmatic_social_heading') ),
	'themesmatic_sharing_headline_size' => intval( get_theme_mod('themesmatic_sharing_headline_size') ),
	'themesmatic_social_sharing_shape' => wp_kses( get_theme_mod('themesmatic_social_sharing_shape'), array('button-square','button-round') ),
	'themesmatic_sharing_icon_size' => intval( get_theme_mod('themesmatic_sharing_icon_size') ),
	'themesmatic_sharing_spacing' => intval( get_theme_mod('themesmatic_sharing_spacing') ),
	'themesmatic_sharing_button_width' => intval( get_theme_mod('themesmatic_sharing_button_width') ),
	'themesmatic_social_popup_heading' => esc_html( get_theme_mod('themesmatic_social_popup_heading') ),
	'themesmatic_social_popup_heading_size' => intval( get_theme_mod('themesmatic_social_popup_heading_size') ),
);
// update options
update_option( 'themesmatic_sharing_options', $social_options );

// registers admin page
 if ( ! function_exists( 'add_themesmatic_sharing_menu' ) ) {
	function add_themesmatic_sharing_menu() {
		add_menu_page(
		__('Social Sharing', 'themesmatic-social' ),
		__('Social Sharing', 'themesmatic-social' ),
		'manage_options',
		'sharing-options',
	    'themesmatic_sharing_menu_content',
	    'dashicons-ssb-icon',
	    5);
	    
	}
add_action('admin_menu', 'add_themesmatic_sharing_menu');
}

if ( ! function_exists( 'themesmatic_social_load_plugin_textdomain' ) ) {
	// loads language files
	function themesmatic_social_load_plugin_textdomain() {
		load_plugin_textdomain('themesmatic-social', false, basename( dirname( __FILE__ ) ) . '/languages' );
	}
	add_action( 'plugins_loaded', 'themesmatic_social_load_plugin_textdomain');
}

// creates admin page content
 if ( ! function_exists( 'themesmatic_sharing_menu_content' ) ) {
	function themesmatic_sharing_menu_content() {
		include "themesmatic-display.php";
	}
}

// registers custom shortcodes
 if ( ! function_exists( 'tm_register_shortcodes' ) ) {
	function tm_register_shortcodes() {
		
		add_shortcode( 'tm_social_sharing', 'tm_social_sharing_shortcode' );
		
	}
	// registers custom shortcodes on init
	add_action('init', 'tm_register_shortcodes');
}

// button shortcode function
include "tm-sharing-buttons.php";

// adds plugin CSS
if ( ! function_exists( 'themesmatic_social_enqueue_scripts_styles' ) ) {
	function themesmatic_social_enqueue_scripts_styles() {
		
		wp_enqueue_style( 'themesmatic_social_style', plugins_url('/css/social-sharing.css',  __FILE__ ) );
		wp_enqueue_style( 'themesmatic_font_awesome', plugins_url('/css/font-awesome.min.css',  __FILE__ ) );
		wp_enqueue_script( 'themesmatic_social_js', plugins_url( '/js/social-sharing.js', __FILE__ ),
	        array('jquery') );
		
	}
add_action( 'wp_enqueue_scripts', 'themesmatic_social_enqueue_scripts_styles', 100 );
}

if ( is_admin() ) {
	// adds admin CSS
	if ( ! function_exists( 'themesmatic_plugin_admin_style' ) ) {
		function themesmatic_plugin_admin_style() {
	        wp_register_style( 'themesmatic_social_admin_css', plugins_url('/css/sharing-admin-style.css', __FILE__ ) );
	        wp_enqueue_style( 'themesmatic_social_admin_css' );
	        wp_register_style( 'themesmatic_font_awesome', plugins_url('/css/font-awesome.min.css',  __FILE__ ) );
		    wp_enqueue_style( 'themesmatic_font_awesome' );
		    wp_register_style( 'themesmatic_social_font', plugins_url('/css/themesmatic-social.css',  __FILE__ ) );
		    wp_enqueue_style( 'themesmatic_social_font' );
		}
		add_action( 'admin_enqueue_scripts', 'themesmatic_plugin_admin_style' );
	}
}
 
// adds shortcode and filters the_content
if ( ! function_exists( 'themesmatic_content' ) ) {
	function themesmatic_content( $content ) {
	    if ( is_single() && is_main_query() ) {
	        $sharing_buttons = do_shortcode( '[tm_social_sharing]' );
	        
	        $after_content = $content . $sharing_buttons;
	        $before_content = $sharing_buttons . $content;
	    
	    if (get_theme_mod('themesmatic_social_sharing_position', 'sharing-after') != 'sharing-before'):
	    	return $after_content;
	    elseif (get_theme_mod('themesmatic_social_sharing_position', 'sharing-after') != 'sharing-after'):
	        return $before_content;
	    endif;
	    
	    } else {
		    return $content;
	    }
	}
	add_filter( 'the_content', 'themesmatic_content' );
}