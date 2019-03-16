<?php

	require_once "connect.php";
	
	function getProducts ($id) {
		global $mysqli;
		connectDB();
		if($id)
			$where = "WHERE `id_product` =".$id;
		$result = $mysqli->query("SELECT * FROM `products` $where ORDER BY `products`.`num_of_sales` DESC");
		closeDB();
		if(!$id)
			return resultToArray ($result);
		else
			return $result->fetch_assoc();
	}

	function get_iProduct ($cat, $sort, $search, $producer, $from, $bef) {
		global $mysqli;
		connectDB();

		$psort = '`products`.`price`';

		if ($cat == '') {
			$cat = '%';
		}

		if ($sort == 'RESC') {
			$sort = 'DESC';
			$psort = '`products`.`num_of_sales`';
		}

		if ($producer == '') {
			$producer = '%';
		}

		if ($from == '') {
			$from = '0';
		}

		if ($bef == '') {
			$bef = '100000000';
		}

		$result = $mysqli->query("SELECT `products`.`name_product`, `products`.`characteristics`, `products`.`id_product`, `products`.`image`, `products`.`price`, `products`.`all_characteristics` FROM `products`, `categories` WHERE ((`categories`.`id_category` = `products`.`id_category`) AND (`categories`.`name` LIKE '$cat') AND (`products`.`name_product` LIKE '%$producer%') AND ((`products`.`name_product` LIKE '%$search%') OR (`products`.`characteristics` LIKE '%$search%')) AND (`products`.`price` BETWEEN $from AND $bef)) ORDER BY $psort $sort");

		closeDB();
		return resultToArray ($result);
	}
	
	function resultToArray ($result) {
		$array = array ();
			while (($row = $result->fetch_assoc()) != false)
				$array[] = $row;
			return $array;
	}

?>