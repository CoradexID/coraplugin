<?php
/*
Plugin Name: CoraPlugin
description: Simple Manga Grabber and Auto Grabber. Making Your Site Updating Content Even if you in Sleep.
Version: 1.0
Author: Ryan Naisu
Author URI: https://www.facebook.com/ryannaisu06
*/

define('CORAPLUGIN_PATH', plugin_dir_path(__FILE__));
define('CORAPLUGIN_THEME', 'zmanga');

require_once(CORAPLUGIN_PATH.'config/'.CORAPLUGIN_THEME.'.php');
require_once(CORAPLUGIN_PATH.'app/database.php');

$data = CoraPlugin_get_series('Test bang');
var_dump($data);