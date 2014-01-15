<html>
	<head>
	</head>
	
	<body>
		<form action="index.php" method="POST" enctype="multipart/form-data">
			<label for="file">Filename: </label>
			<input type="file" name="file" id="file" />
			<br />
			<input type="submit" name="submit" value="Submit" />
		</form>
		
		<hr>
		
		<?php 
		if ($_FILES["file"]["error"] > 0) {
			echo "Error: " . $_FILES["file"]["error"] . "<br>";
		} else {
			echo "Upload: " . $_FILES["file"]["name"] . "<br>";
			echo "Type: " . $_FILES["file"]["type"] . "<br>";
			echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
			echo "Stored in: " . $_FILES["file"]["tmp_name"];
			
			//move the file
			//$dir = "/var/www/";
			$dir = "files/";
			$filename = $_FILES["file"]["name"];
			$tmp = $_FILES["file"]["tmp_name"];
			
			move_uploaded_file($tmp, $dir.$filename);
			
			echo '<img src="' .$filename. '">';
			
		}
		?>
	</body>
</html>