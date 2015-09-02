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
use App\View;










// setting up view
$view = new View();

// setting up router
$router = new Router();

// 404
$router->set404(function() {
	header('HTTP/1.1 404 Not Found');
	echo '404 | Page not found!';
});

// /home
$router->get('/', function() use ($view)
{
	// 01 / new view
	// $view = new View();
	$view->load('layout');

	// 02 / sample data
	$sample_data = [
		"name" => "bramus",
		"say"  => "this is a dream",
	];

	// 03 / assign the data
	$view->assign('data', $sample_data);

});







// before
$router->before('GET', '/.*', function()
{
    // echo '// ... this will always be executed';
});







// run
$router->run(function()  use ($view)
{
    $view->display();
});


// eof bootstrap.php