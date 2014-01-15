<?php 

set_error_handler('customError');

function customError($errno, $errstring)
{
	echo "<b>Error: </b>. [$errno]. $errstring<br>";
	
	error_log($errstring, 1, "b_tootoonchi@yahoo.com", "From: babak.tootoonchi@gmail.com");
	
	die("");
}

$i = 3;

if ($i > 5) {
	echo "Do something";
} else {
	trigger_error("I is less then 5.");
}
?>