<?php 

require 'connect.inc.php';

?>

<form action="index.php" method="GET">
	Choose a food type: 
	<select name="uh">
		<option value="u">Unhealthy</option>
		<option value="h">Healthy</option>
	</select><br><br>
	<input type="submit" value="Submit"/>
</form>

<?php

if (isset($_GET['uh']) && !empty($_GET['uh'])) {
	
	$uh = strtolower($_GET['uh']);
	
	if ($uh == 'u' || $uh == 'h') {
		$sql = "SELECT languages_id, name FROM languages";// WHERE (name LIKE 'BABAK') ORDER BY name DESC;";
	
		if ($result = mysql_query($sql)) {
		
			/*if (mysql_rum_rows($result) == NULL) {
				echo 'No resuls found.';
			} else {*/
				while ($row = mysql_fetch_assoc($result)) {
					echo '<br>'.'Fetch Assoc'.'<br>';
					$id = $row['languages_id'];
					$name = $row['name'];
					echo $id.' '.$name.'<br>';
				}
		
				// OR
		
				while ($row = 	mysql_fetch_array($result)) {
					//echo $row['id'].' '.$row['name'].'<br>';
					echo '<br>'.'Fetch Array'.'<br>';
					extract($row);
					echo $languages_id.' '.$name.'<br>';
				}
		
			//}

		} else {
			echo 'Query failed. '.mysql_error();
		}

		mysql_close();
	} 
}
?>

