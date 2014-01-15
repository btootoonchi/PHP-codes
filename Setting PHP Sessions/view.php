<?php 


session_start();

echo $_SESSION['name'];
echo '<br>';

if (isset($_SESSION['username'])) {
	echo 'Welcome'.$_SESSION['username'];
} else {
	echo 'Please log in.';
}
?>