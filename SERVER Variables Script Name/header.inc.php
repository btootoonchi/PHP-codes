<?php
$script_name = $_SERVER['SCRIPT_NAME'];
echo $script_name;
?>

<form action="<?php echo $script_name; ?>" method="POST">
	<input type="submit" value="Submit" name="submit"/>
</form>