<?php require_once('includes/header.php'); ?>

<div class="header-slider busketimg">
	<span class="header-title">Сегодня тебе <br>повезет!</span><br/>
	<span class="header-slogan">
		каждый сотый <br>
		покупатель получает <br>
		скидку 50% до конца этой недели!
	</span>

	<div class="slider-wrap">
		<div class="slider-container">
			<div id="slider__actual">

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p1.png" alt="">
							</div>
							<p>
								Хозяйственные товары
							</p>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p2.png" alt="">
							</div>
							<p>
								Бумажно-гигиеническая продукция
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p3.png" alt="">
							</div>
							<p>
								Бумажная продукция
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p4.png" alt="">
							</div>
							<p>
								Профессиональная химия
							</p>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p5.png" alt="">
							</div>
							<p>
								Бумага и чековая лента
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p6.png" alt="">
							</div>
							<p>
								Пленка упаковочная
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p7.png" alt="">
							</div>
							<p>
								Одноразовая посуда
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p8.png" alt="">
							</div>
							<p>
								Пакеты
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p9.png" alt="">
							</div>
							<p>
								Одноразовая упаковка
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box">
						<a href="#">
							<div class="item-box-img">
								<img src="img/p10.png" alt="">
							</div>
							<p>
								Бытовая химия
							</p>
						</a>
					</div>
				</div>								

			</div>
		</div>
		<div class="slider-line"></div>
	</div>

</div>

<!-- busket content -->
<div class="busket">
	<h2 class="busket_caption">Моя корзина</h2>


	<div class="busket_table">
		<div class="busket_table__name">
			<span class="busket__nameproduct">Наименование товара</span>
			<div class="busket_table__img">
				<img src="img/busket1.jpg" alt="">
			</div>
			<div class="busket_table__txtbox">
				<h4>Сумка пластиковая ПЭ серый 157*467*520мм. </h4>
				<span>Артикул: 413800в </span>
				<span>Цвет: Серый</span>
				<span>Материал: ПЭ</span>
			</div>
		</div>

		<div class="busket_table__pricebox">
			<span class="busket_table__caption">Цена</span>
			<div class="busket_table__price">
				<span>15 руб.</span>
			</div>
		</div>


		<div class="busket_table__kolvo">
			<span class="busket_table__caption">Количество</span>
			<div class="switch__number text-align__center">
				<span class="switch-button">+</span>
				<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
				<span class="switch-button">-</span>
			</div>
		</div>		 

		<div class="busket_table__sort">
			<span class="busket_table__caption">Фасовка</span>
			<div class="busket_table__sorttxt">
				<span>50шт/уп</span>
				<span>200шт/кор</span>
			</div>
		</div>  	
		
		<div class="busket_table__mass">
			<span class="busket_table__caption">Вес</span>
			<div class="busket_table__masstxt">
				<span>63 кг</span>
			</div>
		</div>

		<div class="busket_table__priceall">
			<span class="busket_table__caption">Итого</span>
			<div class="busket_table__pricealltxt">
				<span>586 руб.</span>
			</div>
		</div>

		<div class="busket_table__delete">
			<a href="#">X</a>
		</div>

	</div>
</div>



<!-- end container -->
</div>
<?php require_once('includes/footer.php'); ?>