<?php
/**
 * View-specific wrapper.
 * Limits the accessible scope available to templates.
 */



namespace App;



class View
{
	/**
	 * View file to include
	 * @var string
	 */
	private $file;

	/**
	 * View data
	 * @var array
	 */
	private $data = array();

	/**
	 * View data
	 * @var boolean
	 */
	private $render = FALSE;

	/**
	 * Layout to include (optional)
	 * @var string
	 */
	private $layout;

    /**
     * Initialize a new view context.
     */
	public function __construct()
	{
		//
	}

    /**
     * Initialize a new view context.
	 *
	 * @param string $file file to include
	 */
	public function load($layout)
	{

    	try {
			$file = APPPATH . 'view/' . $layout . '.php';

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

    /**
     * Safely escape/encode the provided data.
     */
    public function h($data)
	{
        return htmlspecialchars((string) $data, ENT_QUOTES, 'UTF-8');
    }

    /**
     * Render the template, returning it's content.
	 * @param string $variable name of the data made available to the view.
     * @param array $value Data made available to the view.
     * @return string The rendered template.
     */
	public function assign($variable, $value)
	{
    	$this->data[$variable] = $value;
	}

    /**
     * Render the template, returning it's content.
     * @return string The rendered template.
     */
	public function display()
	{
    	extract($this->data);
		
		// ob_start();
		// var_dump ( ob_get_level() );
    	$content = include($this->render);

		// $content = ob_get_clean();
		// $content = strtolower($content);
		
		return $content;
		
	}

    /**
     * __destruct
     */
	public function __destruct()
	{
		//
	}



}
