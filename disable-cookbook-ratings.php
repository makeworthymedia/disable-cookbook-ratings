<?php
/**
 * @package Disable_Cookbook_Ratings
 * @version 1.0
 */
/*
Plugin Name: Disable Cookbook Ratings
Plugin URI: https://www.makeworthymedia.com/plugins/
Description: Disables ratings in the Cookbook recipe plugin.
Author: Makeworthy Media
Version: 1.0
Author URI: https://www.makeworthymedia.com/
License: GPL2
*/

/*  Copyright 2017 Jennette Fulda  (email : contact@makeworthymedia.com)

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

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

// Run after plugins and themes have loaded
add_action( 'wp_loaded', 'mwm_dcr_disable_cookbook_ratings' );

// Disable ratings on the front-end and back-end of the site
function mwm_dcr_disable_cookbook_ratings() {
	// Disables most ratings features
	add_filter( 'cookbook_rating_enabled', false );

	// Removes ratings from JSON
	add_filter( 'cookbook_recipe_metadata', 'mwm_dcr_modify_recipe_meta' );
}

// Removes 'aggregateRating' data from the JSON outputted to the screen
function mwm_dcr_modify_recipe_meta($recipe) {
	unset($recipe['aggregateRating']);
	return $recipe;
}