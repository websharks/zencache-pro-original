<?php
/*
Version: 141001
Text Domain: zencache
Plugin Name: ZenCache Pro
Network: true

Author: s2Member® / WebSharks, Inc.
Author URI: http://www.s2member.com

Plugin URI: http://www.websharks-inc.com/product/zencache/
Description: WordPress advanced cache plugin; speed without compromise!

Speed up your site (BIG time!) — ZenCache provides reliable page caching for WordPress. Easy-to-use (very simple installation).
*/
if(!defined('WPINC')) // MUST have WordPress.
	exit('Do NOT access this file directly: '.basename(__FILE__));

if(require(dirname(__FILE__).'/includes/wp-php53.php')) // TRUE if running PHP v5.3+.
	require_once dirname(__FILE__).'/zencache-pro.inc.php';
else wp_php53_notice('ZenCache Pro');