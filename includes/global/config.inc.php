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
    
    function get_relative_path($path1, $path2=''){
        if($path2 == ''){
            $path2 = $path1;
            $path1 = getcwd();
        }

        $path1 = trim($path1, '/');
        $path2 = trim($path2, '/');

        while(substr_count($path1, '//'))
            $path1 = str_replace('//', '/', $path1);

        while(substr_count($path2, '//'))
            $path2 = str_replace('//', '/', $path2);

        $arr1 = explode('/', $path1);

        if($arr1 == array(''))
            $arr1 = array();

        $arr2 = explode('/', $path2);

        if($arr2 == array(''))
            $arr2 = array();

        $size1 = count($arr1);
        $size2 = count($arr2);

        $path = '';

        for($i = 0; $i < min($size1, $size2); $i++){
            if($arr1[$i] == $arr2[$i])
                continue;
            else
                $path = '../' . $path . $arr2[$i] . '/';
        }

        if($size1 > $size2){
            for($i = $size2; $i < $size1; $i++)
                $path = '../' . $path;
        } else if ($size2 > $size1){
            for($i = $size1; $i < $size2; $i++)
                $path .= $arr2[$i] . '/';

            return './' . $path;
        }
        
        return './';
    }    

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
        
    define('WEB_ROOT', '/app/www');
    define('SITE_PATH', '');

    define('SITE_ROOT', get_relative_path(WEB_ROOT . '/' . SITE_PATH . '/', $cwd));

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