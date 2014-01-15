<?php 

if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password_hash = md5($password);//password 12345678
	
	if (!empty($username) && !empty($password)) {
		$query = "SELECT id FROM users WHERE username = '$username' AND password = '$password_hash'";
		
		//echo $query;
		if (@$query_run = mysql_query($query)) {
			$query_num_rows = mysql_num_rows($query_run);
			if ($query_num_rows == 0) { 
				echo 'Invalid username/password combination.<br>';
			} else if ($query_num_rows == 1) {
				$user_id = mysql_result($query_run, 0, 'id');
				$_SESSION['user_id'] = $user_id;
				echo $password_hash.'OK num.$user_id.<br>';
				header('Location: index.php');
			}
		}
		
	} else {
		echo 'You must supply a username and password.<br>';
	}
}
?>

<form action="<?php echo $current_file; ?>" method="POST">
	Username: <input type="text" name="username"> 
	Password: <input type="password" name="password"> 
	<input type="submit" name="Log in"> 
</form>