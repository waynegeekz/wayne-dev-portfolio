<?php

/*
Plugin Name: Contact Form 7 - PayPal & Stripe Add-on
Plugin URI: https://wpplugin.org/paypal/
Description: Integrates PayPal & Stripe with Contact Form 7
Author: Scott Paterson
Author URI: https://wpplugin.org
License: GPL2
Version: 1.6.3
*/

/*  Copyright 2014-2020 Scott Paterson

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/



// plugin variable: cf7pp

// empty function used by pro version to check if free version is installed
function cf7pp_free() {
}

// check if pro version is attempting to be activated - if so, then deactive this plugin
if (function_exists('cf7pp_pro')) {

	deactivate_plugins('contact-form-7-paypal-add-on-pro/paypal.php');

} else {

	//  plugin functions
	register_activation_hook( 	__FILE__, "cf7pp_activate" );
	register_deactivation_hook( __FILE__, "cf7pp_deactivate" );
	register_uninstall_hook( 	__FILE__, "cf7pp_uninstall" );

	function cf7pp_activate() {
		
		// default options
		$cf7pp_options = array(
			'currency'    		=> '25',
			'language'    		=> '3',
			'liveaccount'    	=> '',
			'sandboxaccount'    => '',
			'mode' 				=> '2',
			'cancel'    		=> '',
			'return'    		=> '',
			'redirect'			=> '2',
			'pub_key_live'		=> '',
			'sec_key_live'		=> '',
			'pub_key_test'		=> '',
			'sec_key_test'		=> '',
		);
		
		add_option("cf7pp_options", $cf7pp_options);
		
	}

	function cf7pp_deactivate() {
		
		delete_option("cf7pp_my_plugin_notice_shown");
		
	}

	function cf7pp_uninstall() {
	}

	// check to make sure contact form 7 is installed and active
	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
	if ( is_plugin_active( 'contact-form-7/wp-contact-form-7.php' ) ) {		
		
		// public includes
		include_once('includes/functions.php');
		include_once('includes/redirect_methods.php');
		include_once('includes/redirect.php');
		include_once('includes/enqueue.php');
		
		if (!class_exists('Stripe\Stripe')) {
			include_once('includes/stripe_library/init.php');
		}
		include_once('includes/process_stripe_payment.php');
		
		// admin includes
		if (is_admin()) {
			include_once('includes/admin/tabs_page.php');
			include_once('includes/admin/settings_page.php');
			include_once('includes/admin/menu_links.php');
			include_once('includes/admin/extensions.php');
		}
		
		
		// start session if not already started
		function cf7pp_session() {
			if(!session_id()) {
				session_start();
			}
		}
		add_action('init', 'cf7pp_session', 1);
		
		
	} else {
		
		// give warning if contact form 7 is not active
		function cf7pp_my_admin_notice() {
			?>
			<div class="error">
				<p><?php _e( '<b>Contact Form 7 - PayPal & Stripe Add-on:</b> Contact Form 7 is not installed and / or active! Please install <a target="_blank" href="https://wordpress.org/plugins/contact-form-7/">Contact Form 7</a>.', 'cf7pp' ); ?></p>
			</div>
			<?php
		}
		add_action( 'admin_notices', 'cf7pp_my_admin_notice' );
		
	}
}


?>