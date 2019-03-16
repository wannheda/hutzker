<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Hutzker Admin";
		require_once "functions.php";
		$product = getiProduct($_GET['id']);
		$edit = editProduct($_GET['id_product'], $_GET['id_category'], $_GET['name_product'], $_GET['image'], $_GET['price'], $_GET['characteristics'], $_GET['all_characteristics']);
		$prod = getiProduct($_GET['id_product']);
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
				<h2>Изменение товара</h2>
				<p>Здесь, изменив необходимые поля, вы можете редактировать товар в базе данных каталога магазина Hutzker</p>
			</div>
			<form method="GET" action="edit.php">
				<?php
					for ($i = 0; $i < count($product); $i++) {
						echo '<input type="text" value="'.$product[$i]["id_product"].'" id="id_product" name="id_product"><br/>
						<input type="text" value="'.$product[$i]["id_category"].'" id="id_category" name="id_category"><br/>
						<input type="text" value="'.$product[$i]["name_product"].'" id="name_product" name="name_product"><br/>
						<input type="text" value="'.$product[$i]["image"].'" id="image" name="image"><br/>
						<input type="text" value="'.$product[$i]["price"].'" id="price" name="price"><br/>
						<textarea name="characteristics" id="characteristics" value="'.$product[$i]["characteristics"].'">'.$product[$i]["characteristics"].'</textarea><br/>
						<textarea name="all_characteristics" id="all_characteristics" value="'.$product[$i]["all_characteristics"].'">'.$product[$i]["all_characteristics"].'</textarea><br/>
						<div id="messageShow"><?=$edit?></div>
						<input type="submit" name="edit" id="edit" value="Редактировать"><br/>';
					}
				
					for ($i = 0; $i < count($prod); $i++) {
						echo '<input type="text" value="'.$prod[$i]["id_product"].'" id="id_product" name="id_product"><br/>
						<input type="text" value="'.$prod[$i]["id_category"].'" id="id_category" name="id_category"><br/>
						<input type="text" value="'.$prod[$i]["name_product"].'" id="name_product" name="name_product"><br/>
						<input type="text" value="'.$prod[$i]["image"].'" id="image" name="image"><br/>
						<input type="text" value="'.$prod[$i]["price"].'" id="price" name="price"><br/>
						<textarea name="characteristics" id="characteristics" value="'.$prod[$i]["characteristics"].'">'.$prod[$i]["characteristics"].'</textarea><br/>
						<textarea name="all_characteristics" id="all_characteristics" value="'.$prod[$i]["all_characteristics"].'">'.$prod[$i]["all_characteristics"].'</textarea><br/>
						<div id="messageShow"><?=$edit?></div>
						<input type="submit" name="edit" id="edit" value="Редактировать"><br/>';
					}
				?>
			</form>
		</div>
	</div>
</body>
</html>