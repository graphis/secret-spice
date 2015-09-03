___LAYOUT___
<hr/>

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
	</code>
</pre>




