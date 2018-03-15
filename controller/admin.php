<?php

class admin extends Controller{
	public function index(){
		$this->data['title'] = 'Admin';
		if (isset($_POST['login'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			$login = DataUsers::loginDataCheck($username,$password);
			if($login == true) {
				$_SESSION['login'] = true;
			} else {
				$this->data['message'] = 'Wrong username or password.';
			}
		}
		if (isset($_POST['upload'])) {
			$id = DataProducts::getMaxId()+1;
			$title = $_POST['title'];
			$description = $_POST['description'];
			$price = $_POST['price'];
			$image = $_POST['image-link'];
			DataProducts::addNewProduct($id,$title,$description,$price,$image);
			$this->data['message'] = 'Successfuly uploaded new product.';
		}
		$this->data['content'] = DataProducts::getAllProducts();
		$this->show_view('admin');
	}
}