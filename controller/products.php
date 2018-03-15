<?php

class products extends Controller{
	public function index(){
		$this->data['title'] = 'Products';
		if (isset($_POST['reserve'])) {
			$_SESSION['products'][] = DataProducts::getSingleProduct($_POST['reserve']);
			header("Location: /homework/aphp/4/cart/index");
		}
		if (isset($_POST['remove_product'])) {
			$id = trim($_POST['remove_product']);
			DataProducts::removeProduct($id);
		}
		$this->data['content'] = DataProducts::getAllProducts();
		$this->show_view('products');
	}
}