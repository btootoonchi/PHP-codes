<?php 
$user_ip = $_SERVER['REMOTE_ADDR'];

echo $string = 'Your ip address is '.$user_ip;

function print_ipaddress() {
	global $user_ip;
	echo $string = 'Your ip address is '.$user_ip;
}

print_ipaddress();


?>