<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-block.css">
	<link rel="stylesheet" href="css/fonts.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	
</head>
<body>

	<div class="tech-wrap">
		<br>
		<br>

		<!-- h2 -->
		<h2>Заголовок</h2>

		<br>
		<br>

		<!-- Кнопки -->
		<a class="but but_1" href="#">Подробнее</a>

		<br>
		<br>

		<a class="but but_2" href="#">Купить</a>
		<br>
		<br>

		<input class="but but_3" type="submit" value="Подписаться">

		<br>
		<br>

		<input class="but but_4" type="submit" value="Поиск">

		<br>
		<br>

		<a class="but but_5" href="#">Оформить заказ</a>

		<br>
		<br>

		<!-- Пагинация -->
		<div class="pagination">
			<div class="pagination__box">
				<a href="#">Следующая</a>
			</div>
			<div class="pagination__box">
				<a class="pag-active" href="#">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<span>...</span>
				<a href="#">18</a>
			</div>
			<div class="pagination__box">
				<a href="#">Предыдущая</a>
			</div>
		</div>

		<br>
		<br>

		<!-- Переключатель -->
		<div class="price-wrap">
			<span>Цена:</span>
			<span class="item-price">10</span>
			<span>руб.</span>
		</div>
		<div class="switch__number text-align__center">
			<span class="switch-button">-</span>
			<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
			<span class="switch-button">+</span>
		</div>
		<div class="total">
			<span>Итоговое число</span><br>
			<input type="text" id="total">
		</div>

		<br>
		<br>
		<!-- Карточка товара -->
		<div class="cart">
			<div class="cart__img">
				<img src="img/posuda.jpg" alt="">
			</div>
			<div class="cart__txt">
				<span>Артикул: 99154</span>
				<p>Туалетная бумага МЯГКИЙ ЗНАК 2-сл ДЕЛЮКС БЕЛАЯ 4 рулона в упаковке 24 в коробке</p>
			</div>
			<div class="cart__but">
				<div class="cart__but_1">
					<span >50.4</span>
				</div>
				<div class="cart__but_2">
					<a class="but but_2" href="#">Купить</a>
				</div>
				<div class="clear"></div>
			</div>
			<div class="switch__number text-align__center">
				<span class="switch-button">-</span>
				<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
				<span class="switch-button">+</span>
			</div>
		</div>

	</div>






	<!-- JS_BLOCK -->
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/fonts.js"></script>
	<script src="js/common.js"></script>
	<script src="js/swiper.min.js"></script>
	<script src="js/jquery.cssslider.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>
</html>
