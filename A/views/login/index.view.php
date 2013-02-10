<?php
	class IndexView extends BaseView{

		public function __construct(){
			// possibly accept error message here
		}

		public function render(){
			include("templates/login/loginForm.tpl.php");
		}
	}
?>