<?php 
$name = 'Babak';
$age = 38;

if (strtolower($name) === 'babak') {
	if ($age >= 20) {
		echo 'You\'re over 20.';
		if (1 === 1) {
			echo ' Yes, 1 is equal to 1!';
		}
	}
} else {
	echo 'You\'r not Babak!';
}

?>