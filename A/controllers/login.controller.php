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
				if( $userModel->checkLogin($username, $password) ){ // login is good
					$userModel->setSession($username);
					header('Location: http://nova.it.rit.edu/~mjl7592/539/project3/A/home');
				}
				else{ // login is bad

				}
			}

			return $this->index();
		}
	}
?>