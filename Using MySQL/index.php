<?php 
$con = mysql_connect("127.0.0.1", "password");

if (!$con) {
	die("Could not connect", mysql_error());
} 

echo "We are connected!";

$sql = "SELECT id, name FROM table1 WHERE (name LIKE 'BABAK') ORDER BY name DESC;";

mysql_select_db("databaseName", $con);
$result = mysql_query($sql);

while ($row = mysql_fetch_array($result)) {
	//echo $row['id'].' '.$row['name'].'<br>';
	extract($row);
	echo $id.' '.$name.'<br>';
}

mysql_close($con);

?>

