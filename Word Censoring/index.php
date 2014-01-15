<?php 

$find = array('babak', 'hamed', 'homan');
$replace = array('b***k', 'h***d', 'h***n');

if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
	//echo $user_input = $_POST['user_input'];
	$user_input = $_POST['user_input'];
	$user_input_new = str_ireplace($find, $replace, $user_input);
	
	echo $user_input_new;
}
?>

<hr>
<form action="index.php" method="POST">
	<textarea name="user_input" rows="6" cols="30">
		<!--<?php echo $user_input; ?>	-->
	</textarea>
	<br>
	<br>
	<input type="submit" value="Submit">
</form>