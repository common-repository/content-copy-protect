<?php
/*
Plugin Name: Content Copy Protect
Plugin URI: http://contentcopyprotect.blogspot.com/
Description: A plugin to float a copyright protect message on your images. 
Author: Zeeshan Aslam Durrani
Version: 1.1
Author URI: http://contentcopyprotect.blogspot.com/
Text Domain: content-copy-protect
Domin Path: Languages
License: GPLV2

Copyright 2015 ZEESHANASLAMDURRANI (email : zeeshanaslamdurrani@gmail.com)
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
*/

/*******************
* Global Variables 
*******************/

$ccp_prefix = 'ccp';
$ccp_plugin_name = 'Content Copy Protect';

/*******************
* includes 
*******************/

$dir = plugin_dir_path( __FILE__ );

include($dir.'includes/scripts.php'); // this file controls all the JS and CSS scripts
include($dir.'includes/data-processing.php'); // to open links in a new window

/*****************
* Translation
******************/

load_plugin_textdomain('content-copy-protect', false, basename(dirname( __FILE__ ) ) . '/languages' );




?>
