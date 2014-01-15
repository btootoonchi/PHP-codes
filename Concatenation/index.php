<?php 

$day = "Wed";
$date = 4;
$year = 2013;

echo 'The date is '.$day.' '.$date.' '.$year;

$text = '<br>Hello';
$text .= ' world!';

echo $text;
 
$number1 = '1';
$number2 = 1;

if ($number1 === $number2) {
	echo '<br>Triple equals. OK.';
} else {
	echo '<br>Triple equals. NOK.';
}

if ($number1 == $number2) {
	echo '<br>Double equals. OK.';
} else {
	echo '<br>Double equals. NOK.';
}

?>