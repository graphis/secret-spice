<?php
/**
 * @package    Fuel\Foundation
 * @version    2.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2014 Fuel Development Team
 * @link       http://fuelphp.com
 */



/**
 *
 * modified based on 	// http://codereview.stackexchange.com/questions/9114/uri-parsing-and-handling-class
 * not need to pass the uri to this class
 *
 */



namespace App;



/**
 * Uri class
 *
 * @package  Fuel\Foundation
 *
 * @since  2.0.0
 */
class View
{

	private $data = array();

	private $render = FALSE;

	public function __construct()
	{
		//
	}

	//
	public function load($template)
	{

    	try {
			$file = APPPATH . 'view/' . $template . '.php';

        	if (file_exists($file)) {
        		$this->render = $file;
        	} else {
            	// throw new customException('Template ' . $template . ' not found!');
				echo '1';
        	}
    	}
   	 	catch (Exception $e) {
     	   // echo $e->errorMessage();
		   echo '2';
    	}
	}

	//
	public function assign($variable, $value)
	{
    	$this->data[$variable] = $value;
	}

	//
	public function display()
	{
    	extract($this->data);
    	include($this->render);
	}

	//
	public function __destruct()
	{
		//
	}



}
