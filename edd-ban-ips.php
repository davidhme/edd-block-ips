<?php

/**
 * Plugin Name:     Easy Digital Downloads - Ban IPs
 * Plugin URI:      https://fatcatapps.com/
 * Description:     Allows you to place IPs in a banned list. These IPs will not be allowed to make purchases.
 * Version:         1.0.0
 * Author:          Fatcat Apps
 * Author URI:      https://fatcatapps.com/
 * Text Domain:     edd-ban-ips
 *
 * @package         EDD\Ban_IPs
 * @author          Fatcat Apps
 * @copyright       Copyright (c) Fatcat Apps
 */


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'EDD_Ban_IPs' ) ) {

	/**
	 * Main EDD_Ban_IPs class
	 *
	 * @since 1.0.0
	 */
	class EDD_Ban_IPs {
		/**
		 * @since 1.0.0
		 * @var string
		 */
		private static $error_message =
			'An internal error has occurred, please try again or contact support.';

		/**
		 * @since 1.0.0
		 * @var EDD_Ban_IPs
		 */
		private static $instance;


		/**
		 * Get active instance
		 *
		 * @since 1.0.0
		 * @return EDD_Ban_IPs
		 */
		public static function instance() {
			if ( ! self::$instance ) {
				self::$instance = new EDD_Ban_IPs();
				self::$instance->setup_constants();
				self::$instance->hooks();
			}

			return self::$instance;
		}


		/**
		 * Setup plugin constants
		 *
		 * @since 1.0.0
		 * @return void
		 */
		private function setup_constants() {
			// Plugin version
			define( 'EDD_BAN_IPS_VER', '1.0.0' );

			// Plugin path
			define( 'EDD_BAN_IPS_DIR', plugin_dir_path( __FILE__ ) );

			// Plugin URL
			define( 'EDD_BAN_IPS_URL', plugin_dir_url( __FILE__ ) );
		}


		/**
		 * Run action and filter hooks
		 *
		 * @since 1.0.0
		 * @return void
		 */
		private function hooks() {
			add_action( 'edd_checkout_error_checks', array( $this, 'check_purchase_ip' ), 10 );

			// Handle licensing
			if ( class_exists( 'EDD_License' ) ) {
				new EDD_License( __FILE__, 'Ban IPs', EDD_BAN_IPS_VER, 'Fatcat Apps' );
			}
		}

		/**
		 * Check the purchase to ensure a banned IP is not allowed through
		 *
		 * @since 1.0.0
		 * @return void
		 */
		public function check_purchase_ip() {
			if ( $this->is_banned() ) {
				edd_set_error( 'ip_banned', __( self::$error_message, 'edd-banned-ips' ) );
			}
		}

		/**
		 * Returns true if the current visitor is banned.
		 *
		 * @since 1.0.0
		 * @return bool
		 */
		private function is_banned() {
			require_once EDD_BAN_IPS_DIR . 'includes/class.ban-ips-geoip.php';

			$geoip = new EDD_Ban_IPs_GeoIP();

			return $geoip->is_current_visitor_in_country( EDD_Ban_IPs_GeoIP::COUNTRY_HONG_KONG );
		}
	}
} // End if class_exists check


/**
 * The main function responsible for returning the EDD_Ban_IPs
 * instance to functions everywhere
 *
 * @since 1.0.0
 * @return EDD_Ban_IPs
 */
function EDD_Ban_IPs_load() {
	if ( ! class_exists( 'Easy_Digital_Downloads' ) ) {
		if ( ! class_exists( 'EDD_Extension_Activation' ) ) {
			require_once 'includes/class.extension-activation.php';
		}

		$activation = new EDD_Extension_Activation( plugin_dir_path( __FILE__ ), basename( __FILE__ ) );
		$activation->run();

		return EDD_Ban_IPs::instance();
	} else {
		return EDD_Ban_IPs::instance();
	}
}

add_action( 'plugins_loaded', 'EDD_Ban_IPs_load' );
