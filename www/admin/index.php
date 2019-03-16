<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Hutzker Admin";
		require_once "functions.php";
		$del = delProduct($_GET['id']);
	?>
	<meta charset=utf-8" />
	<title><?=$title?></title>
	<link rel="icon" type="image/png" href="icon.png" />
	<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div id="logo">
		<img src="BigIcon.png" alt="Hutzker" title="Hutzker">
			<a href="index.php" title="Перейти на главную">
				HUTZKER
			</a>
		</div>
		<div id="search">
			<form id="search_form" action="index.php" method="GET">
				<p>
					<input type="search" name="search_line" id="search_line" placeholder="Поиск">
					<input type="submit" id="search_b" value="Найти">
				</p>
			</form>
		</div>
		<div id="href">
			<div id="add">
				<a href="add.php">
					<div>Добавить товар</div>
				</a>
			</div>
			<div id="exit">
				<a href="/"><div>Выход</div></a>
			</div>
		</div>
	</header>
	<div id="wrapper" style="margin-left: 6%;">
		<div id="leftCol">
			<?php
				$products = getProducts($_GET['search_line']);
				for ($i = 0; $i < count($products); $i++) {
					echo '<div id="article">
					<img src="'.$products[$i]["image"].'" alt=\"article_'.$products[$i]["id_product"].'\" title=\"article_'.$products[$i]["id_product"].'\">
					<h4>'.$products[$i]["name_product"].'</h4>
					'.$products[$i]["characteristics"].'
					<h2>'.$products[$i]["price"].' грн.</h2>
				<a href="edit.php?id='.$products[$i]["id_product"].'" style="font-size: 1.3em;">Редактировать</a><br>
				<a href="delete.php?id='.$products[$i]["id_product"].'" style="font-size: 1.3em;">Удалить</a>
				</div>';
				}
			?>
		</div>
	</div>
</body>
</html>