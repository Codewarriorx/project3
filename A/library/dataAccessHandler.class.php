<?php
	class DataAccessHandler{
		private $dbHost, $dbName, $dbUser, $dbPass, $pdo, $lastInsertID;

		public function __construct(){
			$this->dbHost = DB_HOST;
			$this->dbName = DB_NAME;
			$this->dbUser = DB_USER;
			$this->dbPass = DB_PASS;
			$this->pdo = $this->connect();
		}

		private function connect(){
			try{
				$pdo = new PDO('mysql:host='.$this->dbHost.';dbname='.$this->dbName, $this->dbUser, $this->dbPass);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e){
				echo "ERROR: ".$e->getMessage();
			}
			return $pdo;
		}

		public function queryDB($query, $id = null){
			try{
				$stmt = $this->pdo->prepare($query);

				if(is_null($id)){
					$stmt->execute();
				}
				else{
					$stmt->execute($id);
				}

				$stmt->setFetchMode(PDO::FETCH_ASSOC);
				$results = $stmt->fetchAll();
			}
			catch(PDOException $e){
				echo "ERROR: ".$e->getMessage();
			}

			return $results;
		}

		public function getLastInsertID(){
			return $this->lastInsertID;
		}

		protected function updateDB($query, $data){
			try{
				$stmt = $this->pdo->prepare($query);
				$stmt->execute($data);
			}
			catch(PDOException $e){
				echo "ERROR: ".$e->getMessage();
			}

			$this->lastInsertID = $this->pdo->lastInsertId();
		}

		protected function sanitize($string){
			$string = trim($string);
			$string = stripslashes($string);
			$string = htmlentities($string);
			$string = strip_tags($string);
			return $string;
		}
	}
?>