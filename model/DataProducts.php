<?php

class DataProducts {
	public static function getAllProducts() {
		$files = glob(ROOT_DIR.'data/products/*.txt');
		$products = array();
		foreach ($files as $file) {
			$data = fopen($file, 'r');
			$product = array();
			while (!feof($data)) {
				$file_row = fgets($data);
				$row = explode(':', $file_row);
				if (isset($row[2])) {
					$product[$row[0]] = $row[1].':'.$row[2];
				} else {
					$product[$row[0]] = $row[1];
				}
			}
			$products[] = $product;
		}
		return $products;
	}

	public static function getSingleProduct($id) {
		$products = self::getAllProducts();
		foreach ($products as $product) {
			foreach ($product as $key => $value) {
				if ($key == 'id' && $value == $id) {
					return $product;
				}
			}
		}
	}

	public static function removeProduct($id) {
		unlink(ROOT_DIR.'data/products/pd'.$id.'.txt');
	}

	public static function getMaxId() {
		$products = self::getAllProducts();
		$all_id = array();
		foreach ($products as $product) {
				array_push($all_id, $product['id']);
		}
		$max_id = max($all_id);
		return $max_id;
	}

	public static function addNewProduct($id,$title,$description,$price,$image) {
		$new_product_file = fopen(ROOT_DIR.'data/products/pd'.$id.'.txt', 'w');
		fwrite($new_product_file, "id:".$id."\r\n");
		fwrite($new_product_file, "title:".$title."\r\n");
		fwrite($new_product_file, "description:".$description."\r\n");
		fwrite($new_product_file, "price:".$price."\r\n");
		fwrite($new_product_file, "image:".$image);
		fclose($new_product_file);
	}
}