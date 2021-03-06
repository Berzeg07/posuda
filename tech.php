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

		
		<br>
		<br>

		<!-- спец предложения -->
		<div class="special">
			<div class="special__top special__top_left">
				<span>Спецпредложения</span>
			</div>
			<div class="special__top special__top_right">
				<a href="#">Показать все ></a>
			</div>
			<div class="special__img">
				<img class="img-responsive" src="img/special.jpg" alt="">
			</div>

			<div class="special__middle">
				<span class="sp-middle">Бумажные горшки для рассады 6 ячеек, цвет в ассортименте, 5шт/упак</span>
				<p> Артикул: 520010<br/>
					Количество в упаковке: 5 шт./уп.<br/>
					Количество в коробке: 10 уп/кор
				</p>


				<div class="special__middle_left">
					<span>23 руб.</span>
				</div>
				<div class="special__middle_right">
					<div class="switch__number text-align__center">
						<span class="switch-button">-</span>
						<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
						<span class="switch-button">+</span>
					</div>
				</div>
				<div class="clear"></div>	

				<div class="special__middle_left2">
					<span>за упаковку (кол-во кратно<br/> упаковке)</span>
				</div>
				<div class="special__middle_right2">
					<a class="but but_2" href="#">Купить</a>
				</div>
				<div class="clear"></div>

				<div class="special__bottom">
					<div class="dd-times__txt">
						<span>До конца<br/> акции:</span>
					</div>
					<div class="dd-times">
						

						<div class="dd-div no-margin">
							<div class="line-timer"></div>
							<span id="dd-days">12</span>
							<div class="kr"></div>
						</div>
						<div class="dd-div">
							<div class="line-timer"></div>
							<span id="dd-hours">12</span>
							<div class="kr"></div>
						</div>
						<div class="dd-div">
							<div class="line-timer"></div>
							<span id="dd-min">17</span>
							<div class="kr"></div>
						</div>
						<div class="dd-div">
							<div class="line-timer"></div>
							<span id="dd-sec">14</span>
						</div>
						<div class="clear"></div>

						<div class="dd-time-txt">
							<span>дней</span>
						</div>
						<div class="dd-time-txt dd-time-txt1">
							<span>час</span>
						</div>
						<div class="dd-time-txt dd-time-txt2">
							<span>минут</span>
						</div>
						<div class="dd-time-txt dd-time-txt3">
							<span>секунд</span>
						</div>
						<div class="clear"></div>

					</div>
					<div class="clearfix"></div>
				</div>

			</div>
		</div><!-- Special end -->

		<!-- Чекбокс -->
		<label>
			<input class="checkbox" type="checkbox" name="checkbox-test" checked>
			<span class="checkbox-custom"></span>
			<span class="label"></span>
		</label>


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
