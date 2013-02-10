<?php
	class DataAccessHandler{
		private $dbHost, $dbName, $dbUser, $dbPass, $mysqli, $lastInsertID;

		public function __construct(){
			$this->dbHost = DB_HOST;
			$this->dbName = DB_NAME;
			$this->dbUser = DB_USER;
			$this->dbPass = DB_PASS;
			$this->mysqli = $this->connect();
		}

		private function connect(){
			return new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);;
		}

		public function queryDB($query, $value = null){
			$stmt = $this->mysqli->prepare($query);

			if(is_null($value)){
				$stmt->execute();
			}
			else{

				$stmt->bind_param($this->getTypes(array($value)), $value);
				$stmt->execute();
			}

			return $this->fetchAllAssoc($stmt->get_result());
		}

		public function getLastInsertID(){
			return $this->lastInsertID;
		}

		protected function updateDB($query, $data){
			$bindParameters = array();
			$stmt = $this->mysqli->prepare($query);
			$bindParameters[] = getTypes($data);

			foreach ($data as $key => $value) {
				$bindParameters[] = &$data[$key];
			}

			call_user_func_array(array($stmt, 'bind_param'), $bindParameters);
			$stmt->execute();

			$this->lastInsertID = $this->mysqli->insert_id;
		}

		private function fetchAllAssoc($result){
			if($result){
				$allRows = array();
				while($row = $result->fetch_assoc()){
					array_push($allRows, $row);
				}
				return $allRows;
			}
			return false;
		}

		private function getTypes($data){
			$types = "";
			foreach ($data as $value){
				if(is_int($value)){ // int
					$types .= 'i';
				}
				elseif(is_float($value)){ // double
					$types .= 'd';
				}
				elseif(is_string($value)){ // string
					$types .= 's';
				}
				else{ // blob or unknown
					$types .= 'b';
				}
			}
			return $types;
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