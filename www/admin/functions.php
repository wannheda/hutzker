<?php

	require_once "connect.php";
	
	function getProducts ($search) {
		global $mysqli;
		connectDB();

		$result = $mysqli->query("SELECT * FROM `products`, `categories` WHERE ((`categories`.`id_category` = `products`.`id_category`) AND ((`products`.`name_product` LIKE '%$search%') OR (`products`.`characteristics` LIKE '%$search%'))) ORDER BY `products`.`num_of_sales` DESC");
		closeDB();
		
			return resultToArray ($result);
	}


	function getiProduct ($prod) {
		global $mysqli;
		connectDB();
		$result = $mysqli->query("SELECT * FROM `products` WHERE (`id_product` = '$prod')");
		closeDB();
		return resultToArray ($result);
	}

	function editProduct ($id_product, $id_category, $name_product, $image, $price, $characteristics, $all_characteristics) {
		global $mysqli;
		connectDB();
		if (($id_product != "") && ($id_category != "") && ($name_product != "") && ($image != "") && ($price != "") && ($characteristics != "") && ($all_characteristics != "")) {
				$result = $mysqli->query("UPDATE `products` SET `id_product` = '$id_product', `id_category` = '$id_category', `name_product` = '$name_product', `image` = '$image', `price` = '$price', `characteristics` = '$characteristics', `all_characteristics` = '$all_characteristics' WHERE (`id_product` = '$id_product')");
				return "Товар изменён";
		}
		else return "Товар не изменён";
		closeDB();
	}

	function addProducts($id_category, $name_product, $image, $price, $characteristics, $all_characteristics) {
		global $mysqli;
		connectDB();
		if (($id_category != "") && ($name_product != "") && ($image != "") && ($price != "") && ($characteristics != "") && ($all_characteristics != "")) {
				$result = $mysqli->query("INSERT INTO `products` (`id_category`,`name_product`, `image`, `price`, `characteristics`, `all_characteristics`) VALUES ('$id_category', '$name_product', '$image', '$price', '$characteristics', '$all_characteristics')");
				return "Товар добавлен";
		}
		else return "Товар не добавлен";
		closeDB();
	}

	function delProduct($prod) {
		global $mysqli;
		connectDB();
		if($prod != "") {
			$result = $mysqli->query("DELETE FROM `products` WHERE (`id_product` = '$prod')");
			return "Товар удалён";
		}
		else return "Товар не удалён";

		closeDB(); 
	}

	function resultToArray ($result) {
		$array = array ();
			while (($row = $result->fetch_assoc()) != false)
				$array[] = $row;
			return $array;
	}

?>