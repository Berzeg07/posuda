<?php require_once('includes/header.php'); ?>

<div class="header-slider order">
	<span class="header-title">Сегодня тебе <br/>повезет!</span><br/>
	<span class="header-slogan">
		каждый сотый<br/>
		покупатель получает<br/>
		скидку 50% до конца этой недели!
	</span>

	<div class="slider-wrap">
		<div class="slider-container">
			<div id="slider__actual">

				<div class="item">
					<div class="item-box item-box__1">
						<a class="item-box_1" href="#">
							<div class="item-box-img item-box-img1">
							</div>
							<p>
								Хозяйственные товары
							</p>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="item-box item-box__2">
						<a href="#">
							<div class="item-box-img item-box-img2">
							</div>
							<p>
								Бумажно-гигиеническая продукция
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__3">
						<a href="#">
							<div class="item-box-img item-box-img3">
							</div>
							<p>
								Бумажная продукция
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__4">
						<a href="#">
							<div class="item-box-img item-box-img4">
							</div>
							<p>
								Профессиональная химия
							</p>
						</a>
					</div>
				</div>

				<div class="item">
					<div class="item-box item-box__5">
						<a href="#">
							<div class="item-box-img item-box-img5">
							</div>
							<p>
								Бумага и чековая лента
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__6">
						<a href="#">
							<div class="item-box-img item-box-img6">
							</div>
							<p>
								Пленка упаковочная
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__7">
						<a href="#"> 
							<div class="item-box-img item-box-img7">
							</div>
							<p>
								Одноразовая посуда
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__8">
						<a href="#">
							<div class="item-box-img item-box-img8">
							</div>
							<p>
								Пакеты
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__9">
						<a href="#">
							<div class="item-box-img item-box-img9">
							</div>
							<p>
								Одноразовая упаковка
							</p>
						</a>
					</div>
				</div>	

				<div class="item">
					<div class="item-box item-box__10">
						<a href="#">
							<div class="item-box-img item-box-img10">
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

</div>

<!-- Оформление заказа -->

<div class="container">
	<div class="row">
		<div class="order-content">
			<h2>Оформление заказа</h2>
			<div class="order-box">
				
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					<div class="order-box__left">
						<input class="order-box__input" type="text" placeholder="Имя">
						<input class="order-box__input" type="text" placeholder="Фамилия">
						<input class="order-box__input" type="text" placeholder="Email">
						<input class="order-box__input" type="text" placeholder="Телефон">
						<select class="order-box__input">
							<option value="1">Город</option>
							<option value="2">Москва</option>			
							<option value="2">Тула</option>			
							<option value="2">Орел</option>			
						</select>
						<textarea class="order-box__input" placeholder="Комментарий к заказу"></textarea>
						<label>
							<input class="checkbox" type="checkbox" name="checkbox-test" checked>
							<span class="checkbox-custom"></span>
							<span class="label label__check">Получать СМС информирование по заказам</span>
						</label>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-4">
					<div class="order-box__right">
						<div class="order-box__right_item">
							<span class="order-title">Способы оплаты</span><br/>

							<label>
								<input class="checkbox" type="radio" name="checkbox-money" checked>
								<span class="checkbox-custom"></span>
								<span class="label label__check">Наличный расчет</span>
							</label><br/>

							<label>
								<input class="checkbox" type="radio" name="checkbox-money">
								<span class="checkbox-custom"></span>
								<span class="label label__check">Безналичный</span>
							</label>
						</div>
						
						<div class="order-box__right_item">
							<span class="order-title">Способы доставки</span><br/>

							<label>
								<input class="checkbox" type="radio" name="checkbox-sheeping" checked>
								<span class="checkbox-custom checkbox-custom2"></span>
								<span class="label label__check label__check_bottom">Доставка заказа по Москве 0 р.<br/>
									<b>(Доставка в пределах города. Сумма заказа от 3000 рублей) </b>
								</span>
							</label><br/>

							<label>
								<input class="checkbox" type="radio" name="checkbox-sheeping">
								<span class="checkbox-custom checkbox-custom2"></span>
								<span class="label label__check label__check_bottom">Самовывоз со склада в Москве 0 р.<br/>
									<b>(Самовывоз со склада по адресу: Уфа, ул. Силикатная, д. 25 )</b> 
								</span>
							</label><br/>

							<label>
								<input class="checkbox" type="radio" name="checkbox-sheeping">
								<span class="checkbox-custom checkbox-custom2"></span>
								<span class="label label__check">Яндекс.Доставка (Самовывоз) 237 р.<br/>
									<b>(Доставка до пункта выдачи. Не более 1 коробки ) </b>
								</span>
							</label><br/>

							<span class="order-title order-title__last">Адрес доставки</span><br/>
							<input class="order-box__input" type="text" placeholder="">

						</div>

					</div>
				</div>

				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 hidden-xs hidden-sm hidden-md"></div>
				<div class="clearfix"></div>





			</div>
		</div>
	</div>

	<div class="busket">
	<h2 class="busket_caption">Состав заказа</h2>


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
				<div class="switch__number">
					<span class="switch-button">-</span>
					<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
					<span class="switch-button">+</span>
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
				<span class="busket_table__caption"></span>
				<a href="#"></a>
			</div>
			<div class="clearfix"></div>
		</div>

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
				<div class="switch__number">
					<span class="switch-button">-</span>
					<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
					<span class="switch-button">+</span>
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
				<span class="busket_table__caption"></span>
				<a href="#"></a>
			</div>
			<div class="clearfix"></div>
		</div>

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
				<div class="switch__number">
					<span class="switch-button">-</span>
					<input class="price_area" type="text" value="1" disabled="disabled" id="quantity">  
					<span class="switch-button">+</span>
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
				<span class="busket_table__caption"></span>
				<a href="#"></a>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="busket__allsummbox">
			<span class="clearbusket">Очистить корзину</span>
			<div class="busket__tovar">
				<h3 class="busket__tovar__cap"><b>3</b> товара на сумму</h3>
				<span class="busket__tovar__summ">1758 руб.</span>
				<span class="busket__tovar__mass">Общий вес; 287 кг</span>
				<a class="but but_5" href="#">Оформить заказ</a>
			</div>
			<div class="clearfix"></div>
		</div>	

		<div class="busket__allsummbox busket__allsummbox2">
			<div class="busket__tovar">
				<span class="busket__tovar__cap">Итого:</span>
				<span class="busket__tovar__summ">1758 руб.</span>
				<span class="busket__tovar__mass">Общий вес; 287 кг</span>
				<a class="but but_5" href="#">Подвердить заказ</a>
			</div>
			<div class="clearfix"></div>
		</div>	
	</div>
</div>


<?php require_once('includes/footer.php'); ?>