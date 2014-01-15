<?php 
	
	class Circle {
		const pi = 3.141;
		
		public function Area($radius) {
			return self::pi * ($radius * $radius);
		}
	}
	
	$c = new Circle;
	echo Circle::pi.'<br>';
	echo $c->Area(100);
?>