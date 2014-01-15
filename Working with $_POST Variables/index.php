<?php 
if (isset($_POST['password'])) {
	if (!empty($_POST['password'])) {
		if ($_POST['password'] == '12345678') {
			echo 'That is correct.';
			echo 'It is'.$_POST['password'];
		}
		else {
			echo 'That is incorrect';
		}
	}
	else {
		echo 'Fill in all fields.';
	}
}
?>

<form action="index.php" method="POST">
	Password:<br><input type="password" name="password"><br><br>
	<input type="submit" value="Submit">
</form>
