<!DOCTYPE html>
<html class="no-js">

<head>

<!-- Meta -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>___DEMO___</title>

<!-- CSS -->
<link href="/resources/ui/css/normalize.css" rel="stylesheet" />
<link href="/resources/ui/css/global.css" rel="stylesheet" />

<link href="/resources/ui/css/main.css" rel="stylesheet" />

</head>

<body>


<hr/>



___LAYOUT___

<a href="page/mikkamakka">mikkamakka | </a>
<a href="page/zorromorro">zorromorro | </a>
<a href="page/neduddki">neduddki</a>


<a href="crypto/aVptOFNXTDFrQ3NDWnJPa2hmd1A3QT09">zzzxxxzzz</a>


<hr/>
<div class="container" id="main">


<div>
<?php


if(isset($_SERVER['HTTP_X_PJAX']) && $_SERVER['HTTP_X_PJAX'] == 'true'){
    echo 'GGGGG';
}
else
{
    // Output content with wrapper/layout
	    // echo 'GGHHHHHHPPP';
}





$title = "Home page";




if( isset ($_SERVER["HTTP_X_PJAX"] ) )
{
	echo "____________" . $_SERVER["HTTP_X_PJAX"] . "________________________";
	echo "____________ OYUFYFKHFY PJAX ________________________";
}
else
{
	// echo "____________ NO PJAX ________________________";
}
	

	
?>
</div>

<?php 
if (isset($menu_demo)) {
  print_r( $menu_demo );
} else {
  // echo "not set";
}
?>

<hr/>

<pre>
<?php 
if (isset($data)) {
  print_r( $data );
} else {
  // echo "not set";
}
?>
<?php
if (isset($crypto_data)) {
  print_r( $crypto_data );
} else {
  // echo "not set";
}
?>
<?php
if (isset($page)) {
  print_r( $page );
  
  if( file_exists( $page ) !== false)
  {
	  include $page;
  }
  
  
} else {
  // echo "not set";
}
?>

</pre>

</div>

<hr/>
___end_LAYOUT___


<!-- profile -->
<?php
// profile
$time_end = microtime(true);
$time = $time_end - APP_START_TIME;
echo "<br/><br/><br/>Page rendered in $time seconds<br/>";
echo 'memory: ' . number_format((memory_get_peak_usage() - APP_MEMORY_USAGE) / 1024, 4).'kb';
?>



<hr>
todo

<pre>
	<code>
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

	exit;

}

continue;



http://stackoverflow.com/questions/10734741/how-to-build-a-good-router-for-php-mvc
// safe array
Your code contains what is known as an LFI vulnerability and is dangerous in its current state.
You should whitelist your what can be used as your $controller, as otherwise an attacker could try to specify something using NUL bytes and possibly going up a directory to include files that SHOULD NOT be ever included, such as /etc/passwd, a config file, whatever.

Your router is not safe for use; beware!

edit: example on whitelisting

$safe = array(
    'ajax',
    'somecontroller',
    'foo',
    'bar',
);
if(!in_array($this->_controller, $safe))
{
    throw new Exception(); // replace me with your own error 404 stuff
}




	</code>
</pre>






	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/resources/ui/js/vendor/jquery/jquery-1.11.2.min.js"><\/script>')</script>

	<script src="/resources/ui/js/vendor/defunkt/jquery.cookie.js"></script>
	<script src="/resources/ui/js/vendor/defunkt/jquery.pjax.js"></script>

	<script src="/resources/ui/js/main.js"></script>



</body>

</html>
