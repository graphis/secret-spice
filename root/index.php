<?php
/**
 *
 * This file is part of my_application.
 * index.php is responsible to set up application enviroment paths,
 * composer autoloader, and call bootstrap
 *
 * @package my_application
 * @version    1.7
 * @license http://opensource.org/licenses/bsd-license.php BSD
 * @copyright  2015 Zsolt Sándor
 *
 */

/**
 * Relative path to the application directory.
 */
$application = '../app/';

/**
 * Relative path to the framework core.
 */
$system = '../system';

/**
 * Set the PHP error reporting level. If you set this in php.ini, you remove this.
 * Dev:			E_ALL | E_STRICT
 * Production:	E_ALL ^ E_NOTICE
 * PHP >= 5.3	E_ALL & ~E_DEPRECATED
 */
error_reporting(E_ALL | E_STRICT);

// Set the full path to the docroot
define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

// Make the application relative to the docroot, for symlink'd index.php
if ( ! is_dir($application) AND is_dir(DOCROOT.$application))
	$application = DOCROOT.$application;

// Make the system relative to the docroot, for symlink'd index.php
if ( ! is_dir($system) AND is_dir(DOCROOT.$system))
	$system = DOCROOT.$system;

// Define the absolute paths for configured directories
define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);

// Clean up the configuration vars
unset($application, $system);



define('APP_START_TIME', microtime(TRUE));
define('APP_MEMORY_USAGE', memory_get_peak_usage());



// Load vendor stuff
require SYSPATH.'vendor/autoload.php';



// Bootstrap the application
require APPPATH.'boot.php';



// eof
