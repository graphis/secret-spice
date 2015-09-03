<?php

// https://thomashunter.name/blog/simple-php-namespace-friendly-autoloader-class/

class Autoloader {
	
    static public function loader($className) {

		$filename = 'classes/' . str_replace('\\', '/', $className) . '.php';

		echo $filename;

        if (file_exists($filename)) {
            include($filename);
            if (class_exists($className)) {
                return TRUE;
            }
        }
        return FALSE;
    }
}



spl_autoload_register('Autoloader::loader');