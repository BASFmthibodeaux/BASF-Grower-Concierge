<?php

// For localhost, $site = 1
// For dev site, $site = 2
$site = 2;

if ($site == 1) {

	// HTTP
	define('HTTP_SERVER', 'http://localhost/basf_grower_concierge/');

	// HTTPS
	define('HTTPS_SERVER', 'http://localhost/basf_grower_concierge/');

	// DIR
	define('DIR_APPLICATION', 'C:/xampp/htdocs/basf_grower_concierge/catalog/');
	define('DIR_SYSTEM', 'C:/xampp/htdocs/basf_grower_concierge/system/');
	define('DIR_IMAGE', 'C:/xampp/htdocs/basf_grower_concierge/image/');
	define('DIR_STORAGE', 'C:/xampp/basf_gc_storage/');
	define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
	define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
	define('DIR_CONFIG', DIR_SYSTEM . 'config/');
	define('DIR_CACHE', DIR_STORAGE . 'cache/');
	define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
	define('DIR_LOGS', DIR_STORAGE . 'logs/');
	define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
	define('DIR_SESSION', DIR_STORAGE . 'session/');
	define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_DATABASE', 'basf_website');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'basf_');
	
}  else {

		// HTTP
	define('HTTP_SERVER', 'http://104.43.195.101/');

	// HTTPS
	define('HTTPS_SERVER', 'http://104.43.195.101/');

	// DIR
	define('DIR_APPLICATION', '/home/avash/basf_website/catalog/');
	define('DIR_SYSTEM', '/home/avash/basf_website/system/');
	define('DIR_IMAGE', '/home/avash/basf_website/image/');
	define('DIR_STORAGE', '/home/avash/basf_website/storage/');
	define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
	define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
	define('DIR_CONFIG', DIR_SYSTEM . 'config/');
	define('DIR_CACHE', DIR_STORAGE . 'cache/');
	define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
	define('DIR_LOGS', DIR_STORAGE . 'logs/');
	define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
	define('DIR_SESSION', DIR_STORAGE . 'session/');
	define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

	// DB
	define('DB_DRIVER', 'mysqli');
	define('DB_HOSTNAME', 'localhost');
	define('DB_USERNAME', 'linx_admin');
	define('DB_PASSWORD', 'Linx1234**');
	define('DB_DATABASE', 'basf_website');
	define('DB_PORT', '3306');
	define('DB_PREFIX', 'basf_');
}