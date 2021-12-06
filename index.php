<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/media.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<title>Сплит-Системы</title>
</head>
<body>

	<header class="header" id="header">
		<div class="container">
			<div class="row">
			<div class="col-sm-6 col-12">

      <a href="retrofit.com" class="col-name_photograph">Сплит-Системы</a>
			</div>
			<!-- /.col -->
			<div class="col-sm-6 col-12">
      <div class="header-phones">
				<a href="tel:+79054399850" class="header-phones_number">+7 (905) 439-98-50</a>
				<a href="tel:+79612823207" class="header-phones_number">+7 (961) 28-23-207</a>
			</div>
			</div>
			<!-- /.col -->
			</div>
			<div class="row">
				<div class="col-lg-7">
					<div class="header-text">
						<h1 class="header-title">Поставим слпит-систему в&nbsp;Таганроге за&nbsp;2 часа от&nbsp;2&nbsp;600&nbsp;рублей.</h1>
						<p class="header__description">
							Выезжаем на дом, консультируем, <br>
							Оплата: наличными, карта,<br>
							в подарок скидка на чистку. 
						</p>
						<div class="row header__triggers">
							<div class="col-lg-4">
							<span class="header-trigger">Знаем все тонкости сложных монтажей,чтобы не было проблем.</span>	
							</div>
							<!-- /.col-lg-4 -->
							<div class="col-lg-4">
							<span class="header-trigger">Работаем с разными кондиционерами, сплит-системы, вентиляционные, напольные.</span>	
							</div>
							<!-- /.col-lg-4 -->
							<div class="col-lg-4">
							<span class="header-trigger">Подходит для любых торговых точек и общепитов.</span>	
							</div>
							<!-- /.col-lg-4 -->
						</div>
						<button data-toggle="modal" data-target="#modal" class="button_light">Заказать</button>
					</div>
				</div>
				<div class="col-lg-5">
 					 <img src="img/till.png" alt="Касса для карт" class="header-img">
				</div>
			</div>
		</div>
	</header>
	<section class="section-products">
		<div class="container">
			<h2 class="section-title_title">
				Асортимент товаров<br>
			</h2>
			<div class="row">
				<?php  
					$array = [
						[
							"title" => "Bismark",
							"img" => "img/products/bismark.jpg",
							"text"=> "Сплит-система Bismark, Мощностя: 7,9,12",
							"price"=> "13990"
						],
						[
							"title" => "Hitachi",
							"img" => "img/products/hitachi.jpg",
							"text"=> "Сплит-система Hitachi, Мощностя: 7,9,12,18",
							"price"=> "33990"
						],
						[
							"title" => "Panasonic",
							"img" => "img/products/panasonic.jpg",
							"text"=> "Сплит-система Panasonic, Мощностя: 7,9,12,18,24",
							"price"=> "45990"
						],
						[
							"title" => "Aeronic",
							"img" => "img/products/aeronik.jpg",
							"text"=> "Сплит-система Aeronic, Мощностя: 7,9,12,18,24",
							"price"=> "17990"
						],
						[
							"title" => "Hisense",
							"img" => "img/products/hisense.jpg",
							"text"=> "Сплит-система Hisense, Мощностя: 7,9,12",
							"price"=> "24990"
						],
						[
							"title" => "Royal-Clima",
							"img" => "img/products/royal.jpg",
							"text"=> "Сплит-система Green, Мощностя: 7,9,12,18",
							"price"=> "18990"
						],
						[
							"title" => "Green",
							"img" => "img/products/green.jpg",
							"text"=> "Сплит-система Green, Мощностя: 7,9,12,18,24",
							"price"=> "16990"
						],
						[
							"title" => "Xigma",
							"img" => "img/products/xigma.png",
							"text"=> "Сплит-система Xigma, Мощностя: 7,9,12,18",
							"price"=> "13990"
						],
						[
							"title" => "Hisense-Black",
							"img" => "img/products/hisense-black.jpg",
							"text"=> "Сплит-система Hisense, Мощностя: 7,9,12",
							"price"=> "34990"
						],
					];
					foreach ($array as &$item) {
    					echo "<div class='col-lg-4 col-md-6  ml-auto mr-auto'><div class='product-card'>";
						echo "<h3 class='product-card_title'>". $item["title"] ."</h3>";
						echo "<img src='". $item["img"] ."' alt='Bismark' class='product-card__image'>";
						echo "<p class='product-card__text'>". $item["text"] ."</p>";
						echo "<strong class='product-card__price'>От ". $item["price"] ."</strong>";
						echo "<button data-toggle='modal-two' class='button_dark'>Заказать</button>";
						echo "</div></div>";
					}
				 ?>
			</div>
		</div>
	</section>

	<section class="section_dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-md-8  ">
					<h2 class="section-title_dark">
						Оставьте номер телефона, мы подскажем, какая мощность вам требуется
						и ответим на ваши вопросы. Это бесплатно.
					</h2>
					<form action="#" class="form-section_horizontal">
						<p class="section_description">
							Обычно перезваниваем за 10 минут, если нужно быстрее - нажмите сюда.
						</p>
					<input type="text" name="user-name" class="form_input" placeholder="Ваше имя">
					<input type="tel" name="user-phone" class="form_input" placeholder="Номер телефона">		
					 <button type="submit" class="form_button">Бесплатная консультация.</button>
					 </form>
					 <p class="section_description">
							Нажимая на кнопку, вы даете согласие на обработку персональных
							данных, подробнее в <a class="section-description_policy" href="#policy" > политике конфендициальности.</a>
						</p>
					
				</div>
			</div>
			
		</div>
	</section>
	<section class="section-extra">
		<div class="container">
			<h2 class="section-title_light">
				Расценки на разные <br>
				виды работ:
			</h2>
			<div class="extra-cards">
					<div class="extra-card">
						<h3 class="extra-card_title">Монтаж/Демонтаж - Сплит-Систем.</h3>
						<p class="extra-catd_text">Монтаж/Демонтаж сплит-систем разных мощностей:
						(7,9,12,18,24), Напольно-Потолочных, Касетных.</p>
						<strong class="extra-card_price">От 2 500/1 500 Р</strong>
						<button data-toggle="modal" data-target="#modal" class="button-black">Консультация</button>
					</div>
					<div class="extra-card">
						<h3 class="extra-card_title">Чистка/Заправка - сплит-систем.</h3>
						<p class="extra-catd_text"> В чистку входит:
						Полная разборка внутреннего, внешнего блока, промывка с химией, продувка с керхера, сборка обратно.
					Заправка: 200 Р 100 грамм (в зависимости от мощности сплит-системы), 500 р сама процедура</p>
						<strong class="extra-card_price">От 1 000/1 200 Р</strong>
						<button data-toggle="modal" data-target="#modal" class="button-black">Консультация</button>
					</div>
					<div class="extra-card">
						<h3 class="extra-card_title">Прокладка магистрали.</h3>
						<p class="extra-catd_text">В магистраль входит: Сетевые провода, медные трубы разных диаметров, 
						термофлекс разных диаметров, дренажный шланг (металопласт/гибкий),фум лента.</p>
						<strong class="extra-card_price">От 650 Р за 1 метр</strong>
						<button data-toggle="modal" data-target="#modal" class="button-black">Консультация</button>
					</div>
					<div class="extra-card">
						<h3 class="extra-card_title">Ремонт Электроники/Пайка магистрали - сплит-систем.</h3>
						<p class="extra-catd_text">Ремонт и Пайка: одна точка пайки 200 р.</p>
						<strong class="extra-card_price">Договорная</strong>
						<button data-toggle="modal" data-target="#modal" class="button-black">Консультация</button>
					</div>
			</div>
		</div>
	</section>
	<section class="section-reasons">
		<div class="container">
			<h2 class="section-title_lights">
				Покупайте сплит-системы у нас.
			</h2>
			<div class="row">
				<div class="col-lg-4 col-sm-6">
					<div class="reasons">
						<h3 class="reason_title">Гарантия</h3>
						<p class="reason_text">На все оборудование распространяется полная гарантия раотоспособности
						на 12 месяцев.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="reasons">
						<h3 class="reason_title">Гарантия на монтаж</h3>
						<p class="reason_text">За все наши монтажи, мы несем гарантию.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="reasons">
						<h3 class="reason_title">Не бросим после монтажа</h3>
						<p class="reason_text">Консультируем и поддерживаем вас по телефону после подключения
						сплит-системы. Если будут сложности - звоните.</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="reasons">
						<h3 class="reason_title">Готовые решения</h3>
						<p class="reason_text">У нас есть готовые решения по сплит-системам для общепита, услуг, 
						розничных магазинов.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="slideshow">
		<div class="container-two">
		<div class="outer">
			<div class="details">
				<h2 class="slider-title">Наши работы</h2>
			</div>
		</div>	
		</div>
	
	</section>
	<section class="contacts">
		<div class="container">
		<div class="row">
		<div class="col-lg-3">
		<h2 class="contacts-title">
		Наши контакты	
		</h2>
		<h3 class="contacts-title_two">
			Адрес
		</h3>
		<adress class="contacts-address">ул. Дзержинского д. 162
		Есть не большая парковка</adress>
		<h3 class="contacts-title_two">Режим работы</h3>
		<p class="contacts-work">С понедельника по пятницу с 9 до 19 часов
		В Воскресенье с 10 до 17 часов</p>
		<h3 class="contacts-title_two">Телефоны</h3>
		<p class="contacts-phone_text">
		<a href="tel:8 (905) 454-23-42"class="contacts_phone">8 (905) 454-23-42</a>
		<a href="8 (905) 545-54-45"class="contacts_phone">8 (905) 545-54-45</a>
		</p>
		</div>	
		</div>
		<iframe class="map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A05af804fb7d8e049cf540bddefbeff10dfa52297fb01dd9cc6f752ae468a3d55&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>	
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
				<a href="vk.com/esperacult" class="col-name_photographs">Сплит-Системы</a>	
				</div>
				<div class="col-lg-4">
				<a href="#policy" class="footer_policy-link">Политика конфиденциальности</a>	
				</div>
				<div class="col-lg-4">
				<span class="footer-developer">Сайт разработал <a class="footer-developer_link" href="https://vk.com">Yan Nagorskiy</a></span>	
				</div>
			</div>
		</div>
	</footer>
	<!-- modal 1 -->
	<div class="modal" id="modal">
		<div class="modal-dialog">
			<div class="modal-header">
				<div class="modal-header_title">Оставьте заявку</div>
				<button class="modal-close">&times;</button>
			</div>
			<div class="modal-body">
			<form action="mail.php" method="POST" class="modal-form_vertical">
						<p class="modal-form">
							Свяжемся с вами через 15 минут.
						</p>
					<input type="text" name="user_name" class="modal_input" placeholder="Ваше имя">
					<input type="tel" name="user_phone" class="modal_input" placeholder="Номер телефона">		
					 <button type="submit"  class="form_buttons">Бесплатная консультация.</button>
					 </form>	
			</div>
		</div>
	</div>
	<!-- modal two -->
	<div class="modal-two" id="modal-two">
		<div class="modal-dialog_two">
			<div class="modal-dialog_two">
			<div class="img">
				<img src="img/products/xigma.png" alt="xigma">
			</div>
			<div class="modal-two_info">
				<h2 class="modal-two_header">Xigma</h2>
				<span class="price">13990</span>
				<h3>Power</h3>
				<span>
					<a class="minBl" href="#" data-price="13990">7</a>
					<a class="minBl" href="#" data-price="17990">9</a>
					<a class="minBl" href="#" data-price="20990">12</a>
				</span>
				<button class="modal-two_btn">Заказать</button>
				</div>
			</div>
				<button  class="modal-close_two">&times;</button>
				</div>
			</div>
	<!-- modal three -->


	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="three.r92.min.js"></script>
	<script src="vanta.cells.min.js"></script>
	<script src="app.js"></script>
	<script src="js/main.js"></script>
	<script src="js/card.js"></script>
</body>
</html>