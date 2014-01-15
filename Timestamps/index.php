<?php 

$time = time();

$time -= 60;
$actual_time = date('d M Y @ h:i:s', $time + strtotime('+1 year 2 hours'));

echo 'The current time is '.$actual_time;
?>