<?php

/**************************************
** Created by Gravitate Cache Plugin **
**************************************/

if(class_exists('GRAVITATE_CACHE') && defined('WP_CONTENT_DIR') && file_exists(WP_CONTENT_DIR.'/plugins/gravitate-cache/gravitate-db-class.php'))
{
	include(WP_CONTENT_DIR.'/plugins/gravitate-cache/gravitate-db-class.php');

	if(class_exists('GRAVITATE_CACHE_WPDB') && ((!$wpdb) || get_class($wpdb) != 'GRAVITATE_CACHE_WPDB'))
	{
		$wpdb = new GRAVITATE_CACHE_WPDB( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST);
	}
}