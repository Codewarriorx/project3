<?php
	class IndexView extends BaseView{
		public function __construct(){

		}

		public function render(){
			$this->includeHeader();

			include('templates/index/welcome.tpl.php');

			$this->includeFooter();
		}
	}
?>