<?php
/**
 *
 * Bootstrap file. Including this file into your application will protect you from evil
 * and bring good luck.  It will also enable access to the skeleton libraries.
 *
 */



// vendor classes
use Bramus\Router\Router;

// application classes
include '../app/classes/View.php';
include '../app/classes/Utility.php';
include '../app/classes/Uri.php';


use App\View;
use App\Uri;









// setting up view
$view = new View();
$router = new Router();
// setting up router
$url = new Uri();

// 404
$router->set404(function() {
	header('HTTP/1.1 404 Not Found');
	echo '404 | Page not found!';
});


// before
$router->before('GET', '/.*', function () use ($view)
{

	// 01 / new view
	// $view = new View();
	$view->load('layout');

	$menu = '<br/>Menu: ' . '<a href="/">home __________ ' . '<a href="/hello/world">hello world</a> __________ ' . '<a href="/crypto/zzzxxxzzz">crypto</a> __________ ';
	
	$view->assign('menu_demo', $menu);
});






// /home
$router->get('/', function() use ($view)
{
	// 01 / new view
	// $view = new View();
	// $view->load('layout');

	// 02 / sample data
	$sample_data = [
		"name" => "bramus",
		"say"  => "this is a dream",
	];

	// 03 / assign the data
	$view->assign('data', $sample_data);

});

// hello/world
$router->get('/hello/(\w+)', function ($name) use ($view)
{
   //  echo 'Hello ' . htmlentities($name);

	// 01 / new view
	// $view = new View();
	$view->load('layout');

	// 02 / sample data
	$sample_data = [
		"name" => $name,
		"say"  => "this is a dream",
	];

	// 03 / assign the data
	$view->assign('data', $sample_data);

});



// crypto
// Dynamic route: /ohai/name/in/parts
$router->get('/crypto/(.*)', function ($url) use ($url, $view) {
    // echo 'Ohai ' . htmlentities($url);
	
	//$zzz = new Uri();
	$enc_dec = new Utility();
	$plain_txt = $url->getSegment(2);
	//echo "Plain Text = $plain_txt\n <br/>";

	$encrypted_txt = $enc_dec->encrypt_decrypt('encrypt', $plain_txt);
	//echo "Encrypted Text = $encrypted_txt\n <br/>";

	$decrypted_txt = $enc_dec->encrypt_decrypt('decrypt', $encrypted_txt);
	//echo "Decrypted Text = $decrypted_txt\n <br/>";

	// error check
	/*
	if( $plain_txt === $decrypted_txt )
	{
		echo "SUCCESS <br/>";
	}
	else
	{
		echo "FAILED <br/>";
	}
	*/

	if (!empty( $url->getSegment(2) )) {

		$decrypted_txt = $enc_dec->encrypt_decrypt('decrypt', $url->getSegment(2));
		//echo "Decrypted Text = $decrypted_txt\n <br/>";  

	}
	else
	{  
	    //echo "N0, mail is not set";
	}



	// 02 / sample data
	$crypto_data = [
		"plain_text"     => $plain_txt,
		"encrypted_txt"  => $encrypted_txt,
		"decrypted_txt"  => $decrypted_txt,
	];

	// 03 / assign the data
	$view->assign('crypto_data', $crypto_data);


});












// run
$router->run(function()  use ($view)
{
    $view->display();
});


// eof bootstrap.php