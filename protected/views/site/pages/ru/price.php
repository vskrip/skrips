<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Цены';
$this->breadcrumbs=array(
	'Цены',
);
?>
<div class="page">
	<div class="page_title">
		<img src="../../images/calculator.png">
		<h1>Цены</h1>
	</div>
	<div class="page_content">
        <div class="panel-group" id="pricePanel">
            <div class="panel panel-default" style="background-color:#fcf8f7;">
                <div class="panel-heading"  style="background-color:#fcf8f7;">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pricePanel" href="#priceForWomen">
                            Для женщин
                        </a>
                    </h4>
                </div>
                <div id="priceForWomen" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Наименование услуги</th>
                                <th class="price_column_right">Цена,<br />рублей</th>
                            </tr>        
                            <tr>
                                <td>Стрижка женская модельная короткий волос</td>
                                <td class="price_column_right">350</td>
                            </tr>
                            <tr>
                                <td>Стрижка женская модельная длинный волос</td>
                                <td class="price_column_right">400</td>
                            </tr>
                            <tr>
                                <td>Подравнивание волос</td>
                                <td class="price_column_right">150</td>
                            </tr>
                            <tr>
                                <td>Подравнивание челки</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Химическая завивка</td>
                                <td class="price_column_right">от 600</td>
                            </tr>
                            <tr>
                                <td>Биозавивка</td>
                                <td class="price_column_right">от 700</td>
                            </tr>
                            <tr>
                                <td>Обесцвечивание волос</td>
                                <td class="price_column_right">от 500</td>
                            </tr>
                            <tr>
                                <td>Мелирование волос</td>
                                <td class="price_column_right">от 600</td>
                            </tr>
                            <tr>
                                <td>Мелирование волос через шапочку</td>
                                <td class="price_column_right">от 800</td>
                            </tr>
                            <tr>
                                <td>Окраска красителем клиента</td>
                                <td class="price_column_right">от 400</td>
                            </tr>
                            <tr>
                                <td>Окраска красителем Schwarzkopf, Salerm</td>
                                <td class="price_column_right">от 700</td>
                            </tr>
                            <tr>
                                <td>Колорирование волос</td>
                                <td class="price_column_right">от 800</td>
                            </tr>
                            <tr>
                                <td>Лечение волос</td>
                                <td class="price_column_right">от 100</td>
                            </tr>
                            <tr>
                                <td>Ламинирование волос короткий волос</td>
                                <td class="price_column_right">от 900</td>
                            </tr>
                            <tr>
                                <td>Ламинирование волос длинный волос</td>
                                <td class="price_column_right">от 1300</td>
                            </tr>
                            <tr>
                                <td>Сушка феном с расческой</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Мытье головы</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Укладка волос</td>
                                <td class="price_column_right">от 300</td>
                            </tr>
                            <tr>
                                <td>Свадебные и праздничные прически</td>
                                <td class="price_column_right">от 1000</td>
                            </tr>
                            <tr>
                                <td>Завивка волос на бигуди</td>
                                <td class="price_column_right">от 500</td>
                            </tr>
                            <tr>
                                <td>Выпрямление волос утюгом</td>
                                <td class="price_column_right">от 400</td>
                            </tr>
                            <tr>
                                <td>Плетение косички "колосок"</td>
                                <td class="price_column_right">от 150</td>
                            </tr>
                            <tr>
                                <td>Стразы</td>
                                <td class="price_column_right">от 300</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="background-color:#e9faf7;">
                <div class="panel-heading" style="background-color:#e9faf7;">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pricePanel" href="#priceForMen">
                            Для мужчин
                        </a>
                    </h4>
                </div>
                <div id="priceForMen" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Наименование услуги</th>
                                <th class="price_column_right">Цена,<br />рублей</th>
                            </tr>
                            <tr>
                                <td>Стрижка модельная</td>
                                <td class="price_column_right">300</td>
                            </tr>
                            <tr>
                                <td>Стрижка модельная креатив</td>
                                <td class="price_column_right">350</td>
                            </tr>
                            <tr>
                                <td>Стрижка молодежная</td>
                                <td class="price_column_right">300</td>
                            </tr>
                            <tr>
                                <td>Стрижка спортивная</td>
                                <td class="price_column_right">250</td>
                            </tr>
                            <tr>
                                <td>Стрижка повышенной сложности</td>
                                <td class="price_column_right">от 450</td>
                            </tr>
                            <tr>
                                <td>Стрижка наголо</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Окантовка</td>
                                <td class="price_column_right">150</td>
                            </tr>    
                            <tr>
                                <td>Лечение волос</td>
                                <td class="price_column_right">от 50</td>
                            </tr>
                            <tr>
                                <td>Филировка</td>
                                <td class="price_column_right">от 50</td>
                            </tr>
                            <tr>
                                <td>Cушка феном</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Мытье головы</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Укладка феном</td>
                                <td class="price_column_right">от 100</td>
                            </tr>
                            <tr>
                                <td>Освежение</td>
                                <td class="price_column_right">30</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="background-color:#f3faf2;">
                <div class="panel-heading" style="background-color:#f3faf2;">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pricePanel" href="#priceForChild">
                            Для детей
                        </a>
                    </h4>
                </div>
                <div id="priceForChild" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Наименование услуги</th>
                                <th class="price_column_right">Цена,<br />рублей</th>
                            </tr>
                            <tr>
                                <td>Детская стрижка</td>
                                <td class="price_column_right">250</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="background-color:#fbfae1;">
                <div class="panel-heading" style="background-color:#fbfae1;">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pricePanel" href="#priceForNails">
                            Маникюрные услуги
                        </a>
                    </h4>
                </div>
                <div id="priceForNails" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Наименование услуги</th>
                                <th class="price_column_right">Цена,<br />рублей</th>
                            </tr>
                            <tr>
                                <td>Маникюр классический</td>
                                <td class="price_column_right">350</td>
                            </tr>
                            <tr>
                                <td>Маникюр французский</td>
                                <td class="price_column_right">150</td>
                            </tr>
                            <tr>
                                <td>Покрытие</td>
                                <td class="price_column_right">от 100</td>
                            </tr>
                            <tr>
                                <td>Парафинотерапия</td>
                                <td class="price_column_right">от 300</td>
                            </tr>
                            <tr>
                                <td>Массаж рук</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Наращивание ногтей (гель, акрил)</td>
                                <td class="price_column_right">от 1000</td>
                            </tr>
                            <tr>
                                <td>Коррекция ногтей</td>
                                <td class="price_column_right">от 700</td>
                            </tr>
                            <tr>
                                <td>Снятие искусственных ногтей</td>
                                <td class="price_column_right">от 500</td>
                            </tr>
                            <tr>
                                <td>Гель-лак</td>
                                <td class="price_column_right">от 800</td>
                            </tr>
                            <tr>
                                <td>Shellac</td>
                                <td class="price_column_right">от 700</td>
                            </tr>
                            <tr>
                                <td>Ремонт ногтей (1 ногтя)</td>
                                <td class="price_column_right">от 100</td>
                            </tr>
                            <tr>
                                <td>Дизайн ногтей (1 ногтя)</td>
                                <td class="price_column_right">от 10</td>
                            </tr>
                            <tr>
                                <td>Снятие гель-лака</td>
                                <td class="price_column_right">300</td>
                            </tr>
                            <tr>
                                <td>Полировка ногтей</td>
                                <td class="price_column_right">от 50</td>
                            </tr>
                            <tr>
                                <td>Снятие лака</td>
                                <td class="price_column_right">20</td>
                            </tr>
                            <tr>
                                <td>Покрытие ногтей</td>
                                <td class="price_column_right">от 50</td>
                            </tr>
                            <tr>
                                <td>Закрепитель ногтей</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Лечение, база</td>
                                <td class="price_column_right">от 30</td>
                            </tr>
                            <tr>
                                <td>Сушка ногтей</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Маска для рук</td>
                                <td class="price_column_right">от 50</td>
                            </tr>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
