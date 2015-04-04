<?php
defined( 'ABSPATH' ) or die( 'You can\'t access this file directly!');
/**
 * Plugin Name: mklasen's Photobox
 * Plugin URI: http://plugins.mklasen.com/photobox/
 * Description: Make direct image links open in prettyphoto
 * Version: 1.0
 * Author: Marinus Klasen
 * Author URI: http://mklasen.com
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 
 
 Copyright 2015  Marinus Klasen  (email : marinus@mklasen.nl)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 
 */
	
	
	/* **************************
	#
	#  Include Styles and Scripts for Front-End
	#
	*************************** */ 
		
	function mklasens_photobox_enqueue() {
		wp_register_script('mklasens-prettyPhoto-js', plugins_url('js/jquery.prettyPhoto.js', __FILE__), array('jquery'), '', true);
		wp_register_style('mklasens-prettyPhoto-css', plugins_url('css/prettyPhoto.css', __FILE__), false);
		wp_register_script('mklasens-photobox-js', plugins_url('js/index.js', __FILE__), array('jquery'), '', true);
		wp_register_style('mklasens-photobox-css', plugins_url('css/index.css', __FILE__), false);
		wp_enqueue_script('jquery');
		wp_enqueue_script('mklasens-prettyPhoto-js');
		wp_enqueue_script('mklasens-photobox-js');
		wp_enqueue_style('mklasens-photobox-css');
		wp_enqueue_style('mklasens-prettyPhoto-css');
	}
	
	add_action( 'wp_enqueue_scripts', 'mklasens_photobox_enqueue' );