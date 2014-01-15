<?php 
include 'header.inc.php';

if (isset($_POST['submit'])) {
	echo 'submit okay<br>';
}

echo '<br>';

$script_name = $_SERVER['SCRIPT_NAME'];
echo $script_name;

?>