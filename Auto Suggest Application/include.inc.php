<?php 
	//echo 'Hello';
	if (isset($_GET['search'])) {
		$search_text = $_GET['search_text'];
	}
	
	if (!empty($search_text)) {
		
		if (@mysql_connect('localhost', 'root', '')) {
			if (@mysql_select_db('ajax')) {
				$query = "SELCT 'name' FROM 'names' WHERE 'name' LIKE '".mysql_real_escape_string($search_text)."%'";
				$query_run = mysql_query($query);
			
				while ($query_row = mysql_fetch_assoc($query_run)) {
					echo $name = $query_row('name').'<br>';
				}
			}
		}
	}

?>
<!--
<?php 

if (isset($_GET['show'])) {
	include $_GET['show'];
}
?>

<input type="submit" onclick="window.location='index.php?show=include.inc.php'">
-->