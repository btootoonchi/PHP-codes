<?php 

$rand = rand();
$max = getrandmax();
echo $rand.'/'.$max;
echo '<br>';
echo '<br>';

if (isset($_POST['roll'])) {
	$rand = rand(1,6);
	echo 'You rolled a '.$rand;
}
?>

<form action="index.php" method="POST">
	<input type="submit" name="roll" value="Roll"/>
</form>