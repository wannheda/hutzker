<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Hutzker Admin";
		require_once "functions.php";
		$add = addProducts($_GET['id_category'], $_GET['name_product'], $_GET['image'], $_GET['price'], $_GET['characteristics'], $_GET['all_characteristics']);
	?>
	<meta charset=utf-8" />
	<title><?=$title?></title>
	<link rel="icon" type="image/png" href="icon.png" />
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
				<h2>Добавление товара</h2>
				<p>Здесь, заполнив все необходимые поля, вы можете добавить товар в базу данных каталога магазина Hutzker</p>
			</div>
			<form method="GET" action="add.php">
			    <div id="filt">
					<select name="id_category" id="id_category">
						<option value="">ID категории</option>	
						<option value="1000">Процессоры</option>
						<option value="1001">Материнские платы</option>
						<option value="1002">Видеокарты</option>
						<option value="1003">Модули памяти</option>
						<option value="1004">Жесткие диски/SSD</option>
						<option value="1005">Блоки питания</option>
						<option value="1006">Системы охлаждения</option>
						<option value="1007">Звуковые карты</option>
						<option value="1008">Корпуса</option>
						<option value="1009">Сетевые карты</option>
					</select><br/>
				</div>
				<input type="text" placeholder="Название товара" id="name_product" name="name_product"><br/>
				<input type="text" placeholder="Ссылка на изображение" id="image" name="image"><br/>
				<input type="text" placeholder="Цена" id="price" name="price"><br/>
				<textarea name="characteristics" id="characteristics" style="color: grey;" placeholder="Характеристики">&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
				</textarea><br/>
				<textarea name="all_characteristics" id="all_characteristics" style="color: grey;" placeholder="Полные характеристики">
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
&lt;p&gt;&lt;/p&gt;
				</textarea><br/>
				<div id="messageShow"></div>
				<input type="submit" name="add" id="add" value="Добавить"><br/>
			</form>
		</div>
	</div>
</body>
</html>