

<?php

class DBMySQL {
	
<<<<<<< HEAD
	protected static $connection;
=======
	public static $connection;
>>>>>>> 81c3529b5e39aebb5ee2fdef7e2551d45255b0ce
	
	public function connect(){
	
		if(!isset($this->connection)){
		
			$hostname = "localhost:3306";	
			$username = "root";
			$password = "";
<<<<<<< HEAD
			$database = "web_bank";
=======
			$database = "gas";
>>>>>>> 81c3529b5e39aebb5ee2fdef7e2551d45255b0ce
			
			$this->connection = mysqli_connect($hostname, $username, $password, $database);
			
		}
		
		if($this->connection === false){
			return false;
		}
		
		return $this->connection;
	}
	
	public function query($query){
		$connection = $this->connect();
		$result = $connection->query($query);
		
		if(!$result){
			$this->printError();
		}
		
		return $result;		
	}
	
	public function select($query){
		$rows = array();
		$result = $this->query($query);
		if($result === false) {
			return false;
		}
		
		$indice = 1;
		while ($row = $result->fetch_assoc()){
			$rows[$indice] = $row;
			$indice = $indice + 1;
		}
		
		return $rows;
	}
	
	public function printError(){
		echo "Error" . $connection->error;
	}
}

 ?>