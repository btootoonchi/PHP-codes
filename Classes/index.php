<html>
	<head>
		<title>Classes</title>
	</head>
	
	<body>
		
		<hr>
		
		<?php 
			interface Ipeople {
				public function sayGoodbye();
			}
			
			interface Ifriends extends Ipeople {
				public function myFriends();
			}
			
			class people implements Ipeople {
				public function myFriends() {
					echo '<br>Hello Friends<br>';
				}
				
				public function sayGoodbye() {
					echo '<br>Goodbye.<br>';
				}
			}
			
			abstract class committee {
				abstract public function sayHello();
				
				public function myClass() {
					echo '<br>committee class<br>';
				}
			}
			
			final class testCommittee extends committee {
				public function sayHello() {
					echo 'Hello This is a final class.';
				}
			}
			
			class person extends committee{
				
				const MAXLENGTH = 100;
				private $id;
				public $name = "";
				public $age = 0;
				
				function setID($userID) {
					$this->id = $userID;
				}
				
				function getID() {
					return $this->id;
				}
				
				function __construct() {
					echo 'I am alive. <br><br>';
				}
				
				function __destruct() {
					echo '<br><br>I am not alive.<br>';
				}
				
				public function sayHello() {
					echo 'Hello my name is  '.$this->name." and I am ".$this->age." years old.";
					echo '<br>';
					echo self::MAXLENGTH;
				}
			}
			
			function CheckObject($o) {
				if (is_object($o)) {
					echo '<hr><br>This is an object!<br>';
					
					$t = get_class($o);
					echo $t."<br>";
					
					if ($t == "person") {
						echo 'The Person class saies hello.:) <hr>';
					} else {
						echo 'Invalid use of function, please use the person class.<hr>';
					}
				} else {
					echo '<hr><br>This is NOT an object!<br><hr>';;
				}
			}
			
			function NoClone($var) {
				$var->name = "Hamed";
			}
			
			function MakeClone($var) {
				$c = clone $var;
				$c->name = "Bobby";
				
				echo $c->name.' is the clones name.<br>';
			}
			
			function CheckAge($age) {
				if ($age > 0) {
					echo 'You are '.$age.' old <br>';
				} else {
					throw new Exception('Age cannot be zero!');
				}
			}
			 
			$e = new person;
			$e->name = "Babak";
			$e->age = 38;
			$e->sayHello();
			$e->myClass();
			
			$uID = 123456789;
			$e->setID($uID);
			echo $e->getID();
			CheckObject($e);
			
			NoClone($e);
			echo 'No Clone: '.$e->name.'<br>';
			MakeClone($e);
			echo 'Clone: '.$e->name.'<br>';
			
			try {
				$age = 40;
				CheckAge($age);
			} catch(Exception $age) {
				echo 'Nooooooooooooo';
			}
			
			$p = new people;
			$p->myFriends();
			$p->sayGoodbye();
			
			$t = new testCommittee;
			$t->sayHello();
			
		?>
	</body>
</html>