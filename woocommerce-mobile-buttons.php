<?php
/*
 * Plugin Name: Woocommerce Mobile Buttons
 * Version: 1.0
 * Plugin URI: https://www.kildedal.no
 * Description: Changes the mobile buttons for Woocommerce
 * Author: Marius Kildedal
 * Author URI: https://www.kildedal.no
 * Requires at least: 4.0
 * Tested up to: 4.0
 *
 * Text Domain: woocommerce-mobile-buttons
 * Domain Path: /lang/
 *
 * @package WordPress
 * 
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit;

// Load plugin class files
require_once( 'includes/class-woocommerce-mobile-buttons.php' );
require_once( 'includes/class-woocommerce-mobile-buttons-settings.php' );

// Load plugin libraries
require_once( 'includes/lib/class-woocommerce-mobile-buttons-admin-api.php' );
require_once( 'includes/lib/class-woocommerce-mobile-buttons-post-type.php' );
require_once( 'includes/lib/class-woocommerce-mobile-buttons-taxonomy.php' );

/**
 * Returns the main instance of Woocommerce_Mobile_Buttons to prevent the need to use globals.
 *
 * @since  1.0.0
 * @return object Woocommerce_Mobile_Buttons
 */
function Woocommerce_Mobile_Buttons () {
	$instance = Woocommerce_Mobile_Buttons::instance( __FILE__, '1.0.0' );

	if ( is_null( $instance->settings ) ) {
		$instance->settings = Woocommerce_Mobile_Buttons_Settings::instance( $instance );
	}

	return $instance;
}

Woocommerce_Mobile_Buttons();
