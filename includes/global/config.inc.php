<?php
	/**
	 * config.inc.php
	 *
	 * master configuration file
	 *
	 *
	 * @author Jonathan Goode <jonathan.goode@abdn.ac.uk>
	 * @copyright Copyright (c) 2014, University of Aberdeen
	 * @version 1.0
	 *
	 */

	ini_set('session.use_only_cookies', 1);
	//ini_set('zlib.output_compression', 4096); //gzip compression on PHP files if browser supports it
	ini_set('session.hash_function', 1); //1 = SHA-1
	ob_start();
	//session_start();

	$https = false; //flag for forcing https

	if(!isset($disabled_https) && $https && $_SERVER['HTTPS'] != 'on'){
		header('HTTP/1.0 301 Moved Permanently');
		header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		exit();
	}

	if((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') || $https)
		define('PROTOCOL', 'https');
	else
		define('PROTOCOL', 'http');
    
    $site_root = '/app/www/';
    
    if($cwd == $site_root)
        $site_root = './';

	define('SITE_ROOT', $site_root);
    
    //DEFINE file paths
	define('CSS_PATH', SITE_ROOT . 'css/');
	define('PRINT_CSS_PATH', CSS_PATH . 'print/');
	define('THEME_CSS_PATH', CSS_PATH . 'theme/');
	define('IMAGE_PATH', SITE_ROOT . 'images/');
	define('LOGOS_IMAGES_PATH', IMAGE_PATH . 'logos/');
	define('INCLUDES_PATH', SITE_ROOT . 'includes/');
	define('GLOBAL_INCLUDES_PATH', INCLUDES_PATH . 'global/');	
	define('LIB_PATH', SITE_ROOT . 'lib/');	
	define('CSS_LIB_PATH', LIB_PATH . 'css/');	
	define('FONT_LIB_PATH', LIB_PATH . 'font/');	
	define('SCRIPTS_LIB_PATH', LIB_PATH . 'scripts/');	
	define('PLUGINS_PATH', SITE_ROOT . 'plugins/');	
	define('HIGHLIGHT_PLUGINS_PATH', PLUGINS_PATH . 'highlight/');	
	define('MARKDOWN_PLUGINS_PATH', PLUGINS_PATH . 'markdown/');	
	define('NOTES_PLUGINS_PATH', PLUGINS_PATH . 'notes/');	
	define('ZOOM_JS_PLUGINS_PATH', PLUGINS_PATH . 'zoom-js/');
	define('SCRIPTS_PATH', SITE_ROOT . 'scripts/');	

	//DEFINE the environment (dev, test, live)
	define('ENVIRONMENT', 'dev');

	//Error reporting should only be on in development
	if(ENVIRONMENT != 'dev')
		error_reporting(false);
	else
		error_reporting(E_ALL ^ E_NOTICE);