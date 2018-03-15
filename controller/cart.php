<?php

class cart extends Controller{
	public function index(){
		$this->data['title'] = 'Cart';
		if (isset($_POST['clear_session'])) {
			unset($_SESSION['products']);
			header("Location: /homework/aphp/4/products/index");
		}
		if (isset($_POST['clear_single_session'])) {
			unset($_SESSION['products'][$_POST['clear_single_session']]);
			if (empty($_SESSION['products'])) {
				unset($_SESSION['products']);
				header("Location: /homework/aphp/4/products/index");
			}
		}
		if (isset($_SESSION['products'])) {
			$this->data['products'] = $_SESSION['products'];
			$this->data['cart_session'] = true;
			$this->data['total_price'] = $this->totalPrice();
			$this->data['total_items'] = $this->totalItems();
		}
		$this->show_view('cart');
	}

	public function totalPrice() {
		$cart_products = $_SESSION['products'];
		$total_price = 0;
		foreach ($cart_products as $product) {
			$total_price += $product['price'];
		}
		return $total_price;
	}

	public function totalItems() {
		$total_items = count($_SESSION['products']);
		return $total_items;
	}
}