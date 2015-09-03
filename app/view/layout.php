___LAYOUT___
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


</pre>



___end_LAYOUT___


<!-- profile -->
<?php
// profile
$time_end = microtime(true);
$time = $time_end - APP_START_TIME;
echo "<br/><br/><br/>Page rendered in $time seconds<br/>";
echo 'memory: ' . number_format((memory_get_peak_usage() - APP_MEMORY_USAGE) / 1024, 4).'kb';
?>



