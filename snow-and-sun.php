<?php
/**
* Plugin Name:       snow-and-sun
* Plugin URI:        https://soorajnraju.com/plugin/snow-and-sun
* Description:       A wordpress plugin boilerplate
* Version:           1.0.0
* Author:            Sooraj N Raju
* Author URI:        https://soorajnraju.com/
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
*/
namespace Snow;

defined('ABSPATH') or exit('Direct access is not allowed');

define('PLUGIN_PATH', plugin_dir_path( __FILE__));
define('PLUGIN_NAME', 'snow-and-sun');

require 'loader.php';

new Loader();

add_action('plugins_loaded', array('Snow\Frontend\Bootstrap', 'init'));
add_action('plugins_loaded', array('Snow\Backend\Bootstrap', 'init'));

