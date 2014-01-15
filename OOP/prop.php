<?php 
	class BankAccount {
		private $balance = 3500;
		var $balanceOfAccount = 2500;
		var $_balance = 1500;
		protected $pbalance = 500;
		
		public function DisplayBalance() {
			return $this->balance;
		}
	}
	
	//new instance of class
	$c = new BankAccount;
	
	echo $c->DisplayBalance().'<br>'; 
	echo $c->balanceOfAccount.'<br>';
	echo $c->_balance.'<br>';
	echo $c->pbalance.'<br>';
	echo $c->balance.'<br>';

?>