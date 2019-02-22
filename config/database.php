<?php
	class Database{
		private $host = "localhost";
		private $dbname = "pdccoes";
		private $username = "root";
		private $password = "";
		public $conn;

		public function getConnection(){
			$this->conn = null;
			try{
				$this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname,$this->username, $this->password);
				//echo "Database Connected";

			}catch(PDOException $exception){
				echo "Connection error: " . $exception->getMessage();
			}
			return $this->conn;
		}
	}
?>