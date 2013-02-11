<?php
	define("PAGE", "home");
	class Home extends BaseController{
		public function index(){
			return new IndexView();
		}
	}
?>