<?php
	class UsersModel extends Crud{
		private $selectAllQuery = 'SELECT * FROM ecomm_user';
		private $selectIDQuery = 'SELECT * FROM ecomm_user WHERE id = ?';
		private $selectUsernameQuery = 'SELECT * FROM ecomm_user WHERE username = ?';
		private $deleteQuery = 'DELETE FROM ecomm_user WHERE id = ?';
		private $insertQuery = 'INSERT INTO ecomm_user (username, email, password, access) VALUES (?,?,?,?)';
		private $updateQuery = 'UPDATE ecomm_user SET username = ?, email = ?, password = ?, access = ? WHERE id = ?';

		public function __construct(){
			parent::__construct();
		}

		public function checkLogin($username, $password){
			$result = $this->queryDB($this->selectUsernameQuery, $username);
			if($result){
				$result = array_pop($result);
				$password = sha1($password);
				if($password == $result['password']){ // check password
					return true;
				}
			}
			else{
				return false;
			}
		}

		protected function buildEntities($data){
			$entities = array();
			foreach ($data as $row) {
				// $tempEntity = new Tag($row['name'], $row['id']);
				array_push($entities, $tempEntity);
			}
			return $entities;
		}
	}
?>