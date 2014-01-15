<?php 
$browser = get_browser(null, true);

print_r($browser);
echo '<br>';
$browser = $browser['browser'];

if ($browser != 'chrome') {
	echo 'Ypu are not using Google Chrome. Please do!';
}
?>