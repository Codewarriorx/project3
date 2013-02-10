<?php
	abstract class BaseView{
		public function includeHeader(){
			include ("templates/header.php");
		}

		public function includeFooter(){
			include ("templates/footer.php");
		}
	}
?>