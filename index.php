<?php
// constant to change if you change root dir in wamp www
define('INCL_PATH', '/homework/aphp/4/');
define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT'].INCL_PATH);
session_start();
function my_autoloader($classname) {
    include 'model/' . $classname . '.php';
}
spl_autoload_register('my_autoloader');

class Controller{
	public $data = array();

	public function show_view($view) {
		if (isset($_POST['logout'])) {
			unset($_SESSION['login']);
		}
		if (isset($_SESSION['login'])) {
			$this->data['session'] = true;
		}
		require 'view/header.php';
		require 'view/'.$view.'.php';
		require 'view/footer.php';
	}
}

if (isset($_GET['m']) && !empty($_GET['m'])) {
	$controller = $_GET['c'];
	include 'controller/'.$controller.'.php';
	$c = new $controller;
	$method = $_GET['m'];
	$c->$method();
} else {
	include 'controller/products.php';
	$c = new products;
	$c->index();
}