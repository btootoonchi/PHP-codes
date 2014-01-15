<?php 
if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
	if (!empty($_GET['day']) &&!empty($_GET['date']) &&!empty($_GET['year'])) {
		echo 'OK';
		echo 'It is'.$_GET['day'].' ',$_GET['date'].' '.$_GET['year'];
	}
	else {
		echo 'Fill in all fields.';
	}
}
?>

<form action="index.php" method="GET">
	Day:<br><input type="text" name="day"><br> 
	Date:<br><input type="text" name="date"><br>
	Year:<br><input type="text" name="year"><br><br>
	<input type="submit" value="Submit">
</form>
