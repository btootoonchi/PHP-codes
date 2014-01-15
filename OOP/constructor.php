<?php
	class Example {
		
		public function __construct($something) {
			$this->SaySomething($something);
		}
		
		public function SaySomething($something) {
			echo 'Something'.$something;
		}
	} 
	
	$e = new Example(' Some Text ');
	$e->SaySomething(' Say SomeThing ');
?>