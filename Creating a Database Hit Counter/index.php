<?php 

require 'connect.inc.php';

$user_ip = $_SERVER['REMOTE_ADDR'];

echo $user_ip.'<br>';

function ip_exists($ip) {
	global $user_ip;
	echo $user_ip.'<br>';
	
	$query = "SELECT ip FROM hits_ip WHERE IP = '$user_ip'";
	echo $query;
	@$query_run = mysql_query($query);
	$query_num_rows = mysql_num_rows($query_run);
	
	if ($query_num_rows == 0) {
		return true;
	} else if ($query_num_rows >= 1) {
		return false;
	}
	
}

function ip_add($ip) {
	$query = "INSERT INTO hits_ip VALUES ('$ip')";
	//$query = "INSERT INTO hits_ip VALUES ('127.0.0.1')";
	echo $query;
	@$query_run = mysql_query($query);
}

function update_count() {
	$query = "SELECT count FROM hits_count";
	
	if (@$query_run = mysql_query($query)) {
		$count = mysql_result($query_run, 0, 'count');
		$count_inc = $count + 1;
		
		$query_update = "UPDATE hits_count SET count = ".$count_inc;
		if (@$query_update_run = mysql_query($query_update)) {
			echo 'ok.<br>';
		}
		
		echo $count.'<br>';
	} else {
		die(mysql_error());
	}
	
}

if (ip_exists($user_ip)) {
	echo 'Exists.<br>';
} else {
	echo 'This will now add count + 1<br>';
	echo 'Doesn\'t exists.<br>';
	
	update_count();
	ip_add($user_ip);
	
}

?>

<h1>My Page</h1>