<?php
/**
 * Plugin Name:       Delete Image With Post
 * Description:       This plugin will delete post image with post.
 * Version:           1.0
 * Author:            Sourov Roy
 * Author URI:        https://somehelpsite.wordpress.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       delete-image
 * Domain Path:       /languages
 */

/*
Delete Image With Post is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
Delete Image With Post is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with Delete Image With Post. If not, see http://www.gnu.org/licenses/gpl-2.0.txt.
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Define necessary constant
 */
if( ! defined( 'DI_ROOT_PATH' ) ){
	define('DI_ROOT_PATH', plugin_dir_path( __FILE__ ));
}

/**
 * The core plugin class
 */
require DI_ROOT_PATH . 'includes/class-delete-image-with-post.php';

/**
 * Active the class
 */
$Delete_Image_With_Post = Delete_Image_With_Post::init();