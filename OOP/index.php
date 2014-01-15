<?php 
	class BankAccount {
		public $balance = 10.5;
		
		public function DisplayBalance() {
			return 'Balance: '.$this->balance;
		}
		
		public function Withdraw($amount) {
			if (($this->balance) < $amount) {
				echo 'Not enough money.<br>';
			} else {
				$this->balance -= $amount;
			}
		}
		
		public function Deposit($amount) {
			$this->balance += $amount;
		}
		
	}
	
	class SavingsAccount extends BankAccount {	
		public $type = '18-25';	
	}
	
	//new instance of class
	$c = new BankAccount;
	$b = new BankAccount;
	
	echo 'c '.$c->DisplayBalance().'<br>';
	echo 'b '.$b->DisplayBalance().'<br>';
	
	$c->Deposit(25);
	$b->Deposit(2500);
	echo 'c '.$c->DisplayBalance().'<br>';
	echo 'b '.$b->DisplayBalance().'<br>';
	
	$c->Withdraw(5);
	$b->Withdraw(1500);
	echo 'c '.$c->DisplayBalance().'<br>';
	echo 'b '.$b->DisplayBalance().'<br>';
	
	//echo $c->type; //does not work
	
	$s = new SavingsAccount;
	echo 's '.$s->DisplayBalance().'<br>';
	$s->Deposit(500);
	echo 's '.$s->DisplayBalance().'<br>';
	$s->Withdraw(1500);
	echo 's '.$s->DisplayBalance().'<br>';
	echo $s->type;
	
?>