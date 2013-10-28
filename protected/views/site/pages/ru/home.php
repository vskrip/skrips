<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Главная страница';
$this->breadcrumbs=array('Главная страница');

?>
<div class="page">
	<div class="page_title">
		<h1 id="home_page_title">Главная страница</h1>
	</div>
	<div class="page_content">
		<div class="home_common_content">
			<h4>Рады приветствовать вас на нашем сайте!</h4>
			<p>
				Вы находитесь на сайте парикмахерского кабинета
				мастера-универсала <strong>Скрипачевой Светланы</strong><br>
				и мастера маникюра <strong>Скрипачевой Майи</strong>.
			</p>
			<p>
				Предлагаем ознакомиться с кратким описание разделов сайта.
			</p>
		</div>
		<div class="home_content">
			<table>
				<tr>
					<td style="width:50%;">
						<div class="home_sections_header">
							<img src="../../images/service.png">
							<h2>Услуги</h2>
						</div>
						<div class="home_sections_content">
							Полный список услуг, предоставляемых в нашем парикмахерском кабинете.
						</div>
					</td>					
					<td>
						<div class="home_sections_header">
							<img src="../../images/calculator.png">
							<h2>Цены</h2>
						</div>
						<div class="home_sections_content">
							Расценки на оказываемые услуги.
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/newspaperb.png">
							<h2>Новости</h2>
						</div>
						<div class="home_sections_content">
							Новости современных технологий окрашивания, ухода за волосами и не только.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/articles.png">
							<h2>Статьи</h2>
						</div>
						<div class="home_sections_content">
							Статьи о стрижках, прическах, методах ухода и многом полезном.
						</div>
					</td>
				</tr>
				<!--TODO: Разкомментировать для добавления информации о галерее и календаре на главной странице-->
				<!--<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/galery.png">
							<h2>Галерея</h2>
						</div>
						<div class="home_sections_content">
							Примеры выполненых работа мастерами парикмахерского кабинета.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/calendar.png">
							<h2>Запись</h2>
						</div>
						<div class="home_sections_content">
							В этом разделе можно записаться на прием к мастеру в удобное для вас время.
						</div>
					</td>
				</tr>-->
				<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/aboutcab.png">
							<h2>О кабинете</h2>
						</div>
						<div class="home_sections_content">
							Адрес парикмахерского кабинета, телефоны, адрес электронной почты, фотоизображение фасада здания, схема проезда.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/aboutus.png">
							<h2>О нас</h2>
						</div>
						<div class="home_sections_content">
							Коротко о мастерах парикмахерского кабинета.
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="home_sections_header">
							<img src="../../images/mail.png">
							<h2>Контакты</h2>
						</div>
						<div class="home_sections_content">
							Форма обратной связи для желающих отправить нам свое сообщение.
						</div>
					</td>
					<td>
						<div class="home_sections_header">
							<img src="../../images/entry.png">
							<h2>Вход</h2>
						</div>
						<div class="home_sections_content">
							Раздел содержит формы для авторизации зарегистрированных пользователей и регистрации новых посетителей.
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>