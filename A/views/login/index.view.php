<?php
	class IndexView extends BaseView{

		public function __construct(){
			
		}

		public function render(){
			// $values = $this->entity->toArray();
			// if($this->onSale){
			// 	$values['price'] = $values['salePrice'];
			// }
			// $values['name'] = $this->decode($values['name']);
			// $values['description'] = $this->decode($values['description']);
			include("templates/login/loginForm.tpl.php");
		}
	}
?>