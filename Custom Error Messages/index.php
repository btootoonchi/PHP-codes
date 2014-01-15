<?php 
	
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = '';
	$mysql_db = 'a_database';
	
	class DatabaseException extends Exception {
		public function showSpecific() {
			return 'Error throw on line '.$this->getLine().' in '.$this->getFile();
		}
	}
	class ServerException extends Exception {
		public function showSpecific() {
			return 'Error throw on line '.$this->getLine().' in '.$this->getFile();
		}
	}
	
	try {
		if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)) {
			throw new ServerException();
		} else if (!@mysql_selectdb($mysql_db)) {
			throw new DatabaseException();
		} else {
			echo 'Connected.';
		}
	} catch (ServerException $ex) {
		echo $ex->showSpecific();
	} catch (DatabaseException $ex) {
		echo $ex->showSpecific();
	}
	
?>
	
	