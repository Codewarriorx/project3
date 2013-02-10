<?php
	class Login extends BaseController{
		public function index(){
			return new IndexView();
		}

		public function submit(){
			if(isset($_POST['login'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$userModel = new UsersModel();
				// $_SERVER['HTTP_REFERER']; redirect to where they were going
				if( $userModel->checkLogin($username, $password) ){
					// login is good
					echo "login is good";
				}
				else{
					// login is bad
					echo "login is bad";
				}

			}

			return $this->index();
		}
	}
?>