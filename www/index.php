<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Hutzker Главная";
		require_once "blocks/head.php";
		$products = getProducts($_GET["id"]);
	?>
</head>
<body>
	<?php 
		require_once "blocks/header.php" 
	?>
	<div id="wrapper">
		<div id="leftCol">
			<?php
				for ($i = 0; $i < count($products); $i++) {
					echo '<div id="article">
					<a href="/article.php?id='.$products[$i]["id_product"].'">
					<img src="'.$products[$i]["image"].'" alt=\"article_'.$products[$i]["id_product"].'\" title=\"article_'.$products[$i]["id_product"].'\">
					<h4>'.$products[$i]["name_product"].'</h4>
					'.$products[$i]["characteristics"].'
					<h2>'.$products[$i]["price"].' грн.</h2></a>
					</div>';
				}
			?>
		</div>
		<?php require_once "blocks/rightCol.php" ?>
	</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>