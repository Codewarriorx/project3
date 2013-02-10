<?php
	class Login extends BaseController{
		public function index(){
			return new IndexView();
		}

		public function submit(){
			// $itemIDs = $_POST['itemID'];
			// $quantities = $_POST['quantity'];

			// $cartModel = new CartModel();
			// $cartModel->updateToCart($itemID, $quantity);

			return $this->index();
		}
	}
?>