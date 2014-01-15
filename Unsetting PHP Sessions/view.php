<?php 


session_start();

echo $_SESSION['name'];
echo '<br>';

if (isset($_SESSION['username']) && isset($_SESSION['age'])) {
	echo 'Welcome'.$_SESSION['username'].'. You are '.$_SESSION['age'].'!';
} else {
	echo 'Please log in.';
}
?>