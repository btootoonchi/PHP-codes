<html>
	
	<head>
		<script type="text/javascript">
			function load() {
				//alert('works');
				if (window.XMLHttpRequest) {
					xmlhttp = new XMLHttpRequest();
				} else {
					xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
				}
				
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById('adiv').innerHTML = xmlhttp.responseText;
					}
				}
				
				xmlhttp.open('GET', 'include.inc.php', true);
				xmlhttp.send();
			}
		</script>
	</head>
	
	<body>
		<input type="submit" onclick="load();">
		<!--<input type="submit" onclick="load('','');">-->
		
		<div id="adiv"></div>
	</body>
	
</html>

<?php ?>
