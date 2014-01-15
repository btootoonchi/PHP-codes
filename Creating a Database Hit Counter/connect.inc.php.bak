<?php 

$conn_error = 'Could not connect.';
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_db = "test";

$con = @mysql_connect($mysql_host, $mysql_user, $mysql_password);// or die($conn_error);

if (!$con || !@mysql_select_db($mysql_db)) {
	//die($conn_error, mysql_error());
	die( mysql_error());
} 

echo "We are connected!";
?>