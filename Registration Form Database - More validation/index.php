<?php 

require 'core.inc.php';
require 'connect.inc.php';

if (loggedin()) {
	$firstname = getfield('firstname');
	$surname = getfield('surname');
	echo 'You\'re logged in.'.$firstname.' '.$surname.'<br><a href="logout.php">Log out</a>';
} else {
	require 'loginform.inc.php';
}
/*
echo $current_file.'<br>';
echo MD5('12345678').'<br>';
*/

?>

<h1>My Page</h1>