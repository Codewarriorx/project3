<?php
	class User {
		private $id;
		private $username;
		private $email;
		private $password;
		private $access;

		public function __construct($username, $email, $password, $access, $id = null){
			$this->id = $id;
			$this->username = $username;
			$this->email = $email;
			$this->password = $password;
			$this->access = $access;
		}

		public function toArray(){
			return get_object_vars($this);
		}
		
		public function getID(){
		    return $this->id;
		}

		public function setID($id){
		    $this->id = $id;
		}

		public function getUsername(){
		    return $this->username;
		}

		public function setUsername($username){
		    $this->username = $username;
		}

		public function getEmail(){
		    return $this->email;
		}

		public function setEmail($email){
		    $this->email = $email;
		}

		public function getPassword(){
		    return $this->password;
		}

		public function setPassword($password){
		    $this->password = $password;
		}

		public function getAccess(){
		    return $this->access;
		}

		public function setAccess($access){
		    $this->access = $access;
		}
	}
?>