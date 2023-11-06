<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Register Menu
register_nav_menus(
	array( 'header-menu' => 'Header Menu' )
	);

// Adding feature/thumbnail image support 
add_theme_support( 'post-thumbnails' );

// Register Sidebar
register_sidebar(
	array( 'name' => 'Category Widget',
	'id'=>'demiccatgory' )
	);
register_sidebar(
	array( 'name' => 'Pagi Widget',
	'id'=>'pagiwidget-id' )
	);
register_sidebar(
	array( 'name' => 'Brand Widget',
	'id'=>'brand-id' )
	);	

// Add custom background
add_theme_support('custom-background');	

?>


