<?php
	class UsersModel extends Crud{
		private $selectAllQuery = 'SELECT * FROM users';
		private $selectIDQuery = 'SELECT * FROM users WHERE id = ?';
		private $selectUsernameQuery = 'SELECT * FROM users WHERE username = ?';
		private $deleteQuery = 'DELETE FROM users WHERE id = ?';
		private $insertQuery = 'INSERT INTO users (username, email, password, access) VALUES (?,?,?,?)';
		private $updateQuery = 'UPDATE users SET username = ?, email = ?, password = ?, access = ? WHERE id = ?';

		public function __construct(){
			parent::__construct();
		}

		public function buildEntities($data){
			$entities = [];
			foreach ($data as $row) {
				$tempEntity = new Tag($row['name'], $row['id']);
				array_push($entities, $tempEntity);
			}
			return $entities;
		}
	}
?>