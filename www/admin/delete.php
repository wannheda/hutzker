<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Hutzker Admin";
		require_once "functions.php";
		$product = getiProduct($_GET['id']);
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

	<div id="wrapper">
		<div id="leftCol">
			<div id="message">
				<h2>Удаление товара</h2>
				<p>Вы действительно хотите удалить этот товар?</p>
			</div>
				<?php
					for ($i = 0; $i < count($product); $i++) {
						echo '<input type="text" value="'.$product[$i]["id_product"].'" id="id_product" name="id_product"><br/>
						<input type="text" value="'.$product[$i]["id_category"].'" id="id_category" name="id_category"><br/>
						<input type="text" value="'.$product[$i]["name_product"].'" id="name_product" name="name_product"><br/>
						<input type="text" value="'.$product[$i]["image"].'" id="image" name="image"><br/>
						<input type="text" value="'.$product[$i]["price"].'" id="price" name="price"><br/>
						<textarea name="characteristics" id="characteristics" value="'.$product[$i]["characteristics"].'">'.$product[$i]["characteristics"].'</textarea><br/>
						<textarea name="all_characteristics" id="all_characteristics" value="'.$product[$i]["all_characteristics"].'">'.$product[$i]["all_characteristics"].'</textarea><br/>
						<div id="messageShow"><?=$del?></div>
						<a href="index.php?id='.$product[$i]["id_product"].'"><input type="button" value="Удалить" id="edit" name="edit"></a><br/>';
					}
				?>
		</div>
	</div>
</body>
</html>