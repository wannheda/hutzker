<!DOCTYPE html>
<html>
<head>
	<?php 
		$title = "Каталог товаров Hutzker";
		require_once "blocks/head.php";
	?>
</head>
<body>
	<header>
		<div id="logo">
			<img src="/img/BigIcon.png" alt="Hutzker" title="Hutzker">
			<a href="/" title="Перейти на главную">
				HUTZKER
			</a>
		</div>
		<div id="href">
			<div id="feedback">
				<a href="/feedback.php">
					<div>Обратная связь</div>
				</a>
			</div>
			<div id="about">
				<a href="/about.php">
					<div>О нас</div>
				</a>
			</div>
			<div id="catalog">
				<a href="/catalog.php">
					<div>Каталог товаров</div>
				</a>
			</div>
		</div>	
	</header>

	<div id="ctlg">
		<div id="header_ctlg">
			<form id="filt_form" action="catalog.php" method="GET">
				<div id="filt">
					<div id="name">Категория</div>
					<select name="product" id="cat">	
						<?php
							if($_GET['product'] == "%") {
								echo '<option selected value="%">Всe</option>';
							}
							else {
								echo '<option value="%">Всe</option>';
							}

							if($_GET['product'] == "Материнские платы") {
								echo '<option selected value="Материнские платы">Материнские платы</option>';
							}
							else {
								echo '<option value="Материнские платы">Материнские платы</option>';
							}

							if($_GET['product'] == "Процессоры") {
								echo '<option selected value="Процессоры">Процессоры</option>';
							}
							else {
								echo '<option value="Процессоры">Процессоры</option>';
							}

							if($_GET['product'] == "Видеокарты") {
								echo '<option selected value="Видеокарты">Видеокарты</option>';
							}
							else {
								echo '<option value="Видеокарты">Видеокарты</option>';
							}

							if($_GET['product'] == "Жесткие диски/SSD") {
								echo '<option selected value="Жесткие диски/SSD">Жесткие диски/SSD</option>';
							}
							else {
								echo '<option value="Жесткие диски/SSD">Жесткие диски/SSD</option>';
							}

							if($_GET['product'] == "Модули памяти") {
								echo '<option selected value="Модули памяти">Модули памяти</option>';
							}
							else {
								echo '<option value="Модули памяти">Модули памяти</option>';
							}

							if($_GET['product'] == "Блоки питания") {
								echo '<option selected value="Блоки питания">Блоки питания</option>';
							}
							else {
								echo '<option value="Блоки питания">Блоки питания</option>';
							}

							if($_GET['product'] == "Сетевые карты") {
								echo '<option selected value="Сетевые карты">Сетевые карты</option>';
							}
							else {
								echo '<option value="Сетевые карты">Сетевые карты</option>';
							}

							if($_GET['product'] == "Корпуса") {
								echo '<option selected value="Корпуса">Корпуса</option>';
							}
							else {
								echo '<option value="Корпуса">Корпуса</option>';
							}

							if($_GET['product'] == "Системы охлаждения") {
								echo '<option selected value="Системы охлаждения">Системы охлаждения</option>';
							}
							else {
								echo '<option value="Системы охлаждения">Системы охлаждения</option>';
							}

							if($_GET['product'] == "Звуковые карты") {
								echo '<option value="Звуковые карты">Звуковые карты</option>';
							}
							else {
								echo '<option value="Звуковые карты">Звуковые карты</option>';
							}
						?>
					</select>
				</div>
				<div id="filt">
					<div id="name">Сортировка</div>
					<select name="s" id="sort">
						<?php
							if ($_GET['s'] == "ASC") {
								echo '<option selected value="ASC">По возрастанию</option>
									<option value="DESC">По убыванию</option>
									<option value="RESC">По популярности</option>';
							}
							else if ($_GET['s'] == "DESC"){
								echo '<option value="ASC">По возрастанию</option>
									<option selected value="DESC">По убыванию</option>
									<option value="RESC">По популярности</option>';
							}
							else {
								echo '<option value="ASC">По возрастанию</option>
									<option value="DESC">По убыванию</option>
									<option selected value="RESC">По популярности</option>';
							}
						?>
					</select>
				</div>
				<div id="filt">
					<div id="name">Производитель</div>
						<select name="prod" id="prod">
							<?php
								if($_GET['prod'] == "Все") {
									echo '<option selected value="%">Все</option>';
								}
								else {
									echo '<option value="%">Все</option>';
								}

								if($_GET['prod'] == "Gigabyte") {
									echo '<option selected value="Gigabyte">Gigabyte</option>';
								}
								else {
									echo '<option value="Gigabyte">Gigabyte</option>';
								}

								if($_GET['prod'] == "Evga") {
									echo '<option selected value="Evga">Evga</option>';
								}
								else {
									echo '<option value="Evga">Evga</option>';
								}

								if($_GET['prod'] == "Intel") {
									echo '<option selected value="Intel">Intel</option>';
								}
								else {
									echo '<option value="Intel">Intel</option>';
								}

								if($_GET['prod'] == "Intel") {
									echo '<option selected value="Intel">Intel</option>';
								}
								else {
									echo '<option value="Intel">Intel</option>';
								}

								if($_GET['prod'] == "AMD") {
									echo '<option selected value="AMD">AMD</option>';
								}
								else {
									echo '<option value="AMD">AMD</option>';
								}

								if($_GET['prod'] == "Asus") {
									echo '<option selected value="Asus">Asus</option>';
								}
								else {
									echo '<option value="Asus">Asus</option>';
								}

								if($_GET['prod'] == "NVidia") {
									echo '<option selected value="NVidia">NVidia</option>';
								}
								else {
									echo '<option value="NVidia">NVidia</option>';
								}

								if($_GET['prod'] == "Western Digital") {
									echo '<option selected value="Western Digital">Western Digital</option>';
								}
								else {
									echo '<option value="Western Digital">Western Digital</option>';
								}

								if($_GET['prod'] == "Seagate") {
									echo '<option selected value="Seagate">Seagate</option>';
								}
								else {
									echo '<option value="Seagate">Seagate</option>';
								}

								if($_GET['prod'] == "Kingston") {
									echo '<option selected value="Kingston">Kingston</option>';
								}
								else {
									echo '<option value="Kingston">Kingston</option>';
								}

								if($_GET['prod'] == "Corsair") {
									echo '<option selected value="Corsair">Corsair</option>';
								}
								else {
									echo '<option value="Corsair">Corsair</option>';
								}

								if($_GET['prod'] == "OSZ") {
									echo '<option selected value="OSZ">OSZ</option>';
								}
								else {
									echo '<option value="OSZ">OSZ</option>';
								}

								if($_GET['prod'] == "SeaSonic") {
									echo '<option selected value="SeaSonic">SeaSonic</option>';
								}
								else {
									echo '<option value="SeaSonic">SeaSonic</option>';
								}

								if($_GET['prod'] == "Thermaltake") {
									echo '<option selected value="Thermaltake">Thermaltake</option>';
								}
								else {
									echo '<option value="Thermaltake">Thermaltake</option>';
								}

								if($_GET['prod'] == "AeroCool") {
									echo '<option selected value="AeroCool">AeroCool</option>';
								}
								else {
									echo '<option value="AeroCool">AeroCool</option>';
								}

								if($_GET['prod'] == "DeepCool") {
									echo '<option selected value="DeepCool">DeepCool</option>';
								}
								else {
									echo '<option value="DeepCool">DeepCool</option>';
								}

								if($_GET['prod'] == "TP-Link") {
									echo '<option selected value="TP-Link">TP-Link</option>';
								}
								else {
									echo '<option value="TP-Link">TP-Link</option>';
								}

								if($_GET['prod'] == "D-Link") {
									echo '<option selected value="D-Link">D-Link</option>';
								}
								else {
									echo '<option value="D-Link">D-Link</option>';
								}

								if($_GET['prod'] == "Samsung") {
									echo '<option selected value="Samsung">Samsung</option>';
								}
								else {
									echo '<option value="Samsung">Samsung</option>';
								}

								if($_GET['prod'] == "InWin") {
									echo '<option selected value="InWin">InWin</option>';
								}
								else {
									echo '<option value="InWin">InWin</option>';
								}

								if($_GET['prod'] == "Dynapower") {
									echo '<option selected value="Dynapower">Dynapower</option>';
								}
								else {
									echo '<option value="Dynapower">Dynapower</option>';
								}

								if($_GET['prod'] == "Be quiet") {
									echo '<option selected value="Be quiet">Be quiet</option>';
								}
								else {
									echo '<option value="Be quiet">Be quiet</option>';
								}

								if($_GET['prod'] == "Accelero") {
									echo '<option selected value="Accelero">Accelero</option>';
								}
								else {
									echo '<option value="Accelero">Accelero</option>';
								}

								if($_GET['prod'] == "Zalman") {
									echo '<option selected value="Zalman">Zalman</option>';
								}
								else {
									echo '<option value="Zalman">Zalman</option>';
								}

								if($_GET['prod'] == "Focusrite") {
									echo '<option selected value="Focusrite">Focusrite</option>';
								}
								else {
									echo '<option value="Focusrite">Focusrite</option>';
								}

								if($_GET['prod'] == "Creative Labs") {
									echo '<option selected value="Creative Labs">Creative Labs</option>';
								}
								else {
									echo '<option value="Creative Labs">Creative Labs</option>';
								}
							?>
						</select>
					</div>
					<div id="filt">
						<div id="name" style="margin-left: 15px;">Цена</div>
						<input type="text" placeholder="От" id="from" name="from">
						<input type="text" placeholder="До" id="before" name="before">
					</div>
					<p>
						<input type="search" name="search_line" id="search_line" placeholder="Поиск">
					</p>
					<input type="submit" name="insort" id="insort" value="Поиск"><br/>
				</form>	
			</div>
		</div>
		<div id="wrapper">
			<div id="leftCol">
				<?php
					if($_GET["id_product"])
						$product = getProducts($_GET["id_product"]);
					else
						$product = get_iProduct($_GET['product'], $_GET['s'], $_GET['search_line'], $_GET['prod'], $_GET['from'], $_GET['before']);

					for ($i = 0; $i < count($product); $i++) {
						echo '<div id="article">
					<a href="/article.php?id='.$product[$i]["id_product"].'">
					<img src="'.$product[$i]["image"].'" alt=\"article_'.$product[$i]["id_product"].'\" title=\"article_'.$product[$i]["id_product"].'\">
					<h4>'.$product[$i]["name_product"].'</h4>
					'.$product[$i]["characteristics"].'
					<h2>'.$product[$i]["price"].' грн.</h2></a>
					</div>';
					}
				?>
			</div>
		<?php require_once "blocks/rightCol.php" ?>
		</div>
	<?php require_once "blocks/footer.php" ?>
</body>
</html>