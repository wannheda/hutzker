<!DOCTYPE html>
<html>
<head>
	<?php 
		require_once "functions/functions.php";
		$product = getProducts($_GET['id']);
		$title = $product["name_product"];
	?>
	<meta charset=utf-8" />
	<title><?=$title?></title>
	<link rel="icon" type="image/png" href="/img/icon.png" />
	<link href="/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php
		require_once "blocks/header.php"; 
	?>
	<div id="product">
		<?php 
			echo '<h4 id="name">'.$product["name_product"].'</h4>
			<div id="one_article">
			<img src="'.$product["image"].'" alt=\"article'.$product["id_product"].'\" title=\"article_'.$product["id_product"].'\"></div>
			<div id="char">
			<h4>Характеристики</h4>
			'.$product["all_characteristics"].'
			<h2>Цена '.$product["price"].' грн.</h2>
			</div>'; 
		?>
		<!-- <div id="bot">
			<h4 id="mes">Что бы заказать товар, звоните 380993456786, 380634578234 или приходите по адресу ул. Генерала Прокрастинатора, 45А, г. Москва, Россия. Для просмотра более детальной информации переходите в раздел "О нас" или "Обратная связь". Мы будем вам рады!</h4>
		</div> -->
	</div>
	<?php
		require_once "blocks/footer.php"; 
	?>
</body>
</html>