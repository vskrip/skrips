<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Price';
$this->breadcrumbs=array(
	'Price',
);
?>
<div class="page">
	<div class="page_title">
		<img src="../../images/calculator.png">
		<h1>Price</h1>
	</div>
	<div class="page_content">
        <div class="panel-group" id="pricePanel">
            <div class="panel panel-default" style="background-color:#fcf8f7;">
                <div class="panel-heading"  style="background-color:#fcf8f7;">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pricePanel" href="#priceForWomen">
                            For women
                        </a>
                    </h4>
                </div>
                <div id="priceForWomen" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Service Title</th>
                                <th class="price_column_right">Price,<br />rubles</th>
                            </tr>        
                            <tr>
                                <td>Haircut short hair female model</td>
                                <td class="price_column_right">350</td>
                            </tr>
                            <tr>
                                <td>Haircut female model long hair</td>
                                <td class="price_column_right">400</td>
                            </tr>
                            <tr>
                                <td>Hair trimming</td>
                                <td class="price_column_right">150</td>
                            </tr>
                            <tr>
                                <td>Fringe trimming</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Perm</td>
                                <td class="price_column_right">from 600</td>
                            </tr>
                            <tr>
                                <td>Bio hair wave</td>
                                <td class="price_column_right">from 700</td>
                            </tr>
                            <tr>
                                <td>Bleaching hair</td>
                                <td class="price_column_right">from 500</td>
                            </tr>
                            <tr>
                                <td>Highlights hair</td>
                                <td class="price_column_right">from 600</td>
                            </tr>
                            <tr>
                                <td>Highlights hair through the cap</td>
                                <td class="price_column_right">from 800</td>
                            </tr>
                            <tr>
                                <td>Coloring customer his dye</td>
                                <td class="price_column_right">from 400</td>
                            </tr>
                            <tr>
                                <td>Coloring dye Schwarzkopf, Salerm</td>
                                <td class="price_column_right">from 700</td>
                            </tr>
                            <tr>
                                <td>Coloring hair</td>
                                <td class="price_column_right">from 800</td>
                            </tr>
                            <tr>
                                <td>Conditioning treatment</td>
                                <td class="price_column_right">from 100</td>
                            </tr>
                            <tr>
                                <td>Lamination of short hair</td>
                                <td class="price_column_right">from 900</td>
                            </tr>
                            <tr>
                                <td>Lamination of long hair</td>
                                <td class="price_column_right">from 1300</td>
                            </tr>
                            <tr>
                                <td>Blow-drying with a comb</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Shampoo</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Laying hair</td>
                                <td class="price_column_right">from 300</td>
                            </tr>
                            <tr>
                                <td>Wedding and party hairstyles</td>
                                <td class="price_column_right">from 1000</td>
                            </tr>
                            <tr>
                                <td>Permanent hair in curlers</td>
                                <td class="price_column_right">from 500</td>
                            </tr>
                            <tr>
                                <td>Hair straightening iron</td>
                                <td class="price_column_right">from 400</td>
                            </tr>
                            <tr>
                                <td>Weaving braids "spike"</td>
                                <td class="price_column_right">from 150</td>
                            </tr>
                            <tr>
                                <td>Rhinestones</td>
                                <td class="price_column_right">from 300</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="panel panel-default" style="background-color:#e9faf7;">
                <div class="panel-heading" style="background-color:#e9faf7;">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#pricePanel" href="#priceForMen">
                            For men
                        </a>
                    </h4>
                </div>
                <div id="priceForMen" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Service Title</th>
                                <th class="price_column_right">Price,<br />rubles</th>
                            </tr>
                            <tr>
                                <td>Haircut model</td>
                                <td class="price_column_right">300</td>
                            </tr>
                            <tr>
                                <td>Haircut model creative</td>
                                <td class="price_column_right">350</td>
                            </tr>
                            <tr>
                                <td>Haircut youth</td>
                                <td class="price_column_right">300</td>
                            </tr>
                            <tr>
                                <td>Haircut sports</td>
                                <td class="price_column_right">250</td>
                            </tr>
                            <tr>
                                <td>Haircut increased complexity</td>
                                <td class="price_column_right">from 450</td>
                            </tr>
                            <tr>
                                <td>Cropped haircut</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Edging</td>
                                <td class="price_column_right">150</td>
                            </tr>    
                            <tr>
                                <td>Conditioning treatment</td>
                                <td class="price_column_right">from 50</td>
                            </tr>
                            <tr>
                                <td>Tapering</td>
                                <td class="price_column_right">from 50</td>
                            </tr>
                            <tr>
                                <td>Crumbling hairdryer</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Shampoo</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Blow-dry</td>
                                <td class="price_column_right">from 100</td>
                            </tr>
                            <tr>
                                <td>Refreshing</td>
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
                            For a child
                        </a>
                    </h4>
                </div>
                <div id="priceForChild" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Service Title</th>
                                <th class="price_column_right">Price,<br />rubles</th>
                            </tr>
                            <tr>
                                <td>Children haircut</td>
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
                            Nail Services
                        </a>
                    </h4>
                </div>
                <div id="priceForNails" class="panel-collapse collapse">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>Service Title</th>
                                <th class="price_column_right">Price,<br />rubles</th>
                            </tr>
                            <tr>
                                <td>Manicure classic</td>
                                <td class="price_column_right">350</td>
                            </tr>
                            <tr>
                                <td>French manicure</td>
                                <td class="price_column_right">150</td>
                            </tr>
                            <tr>
                                <td>Cover</td>
                                <td class="price_column_right">from 100</td>
                            </tr>
                            <tr>
                                <td>Paraffin</td>
                                <td class="price_column_right">from 300</td>
                            </tr>
                            <tr>
                                <td>Hand massage</td>
                                <td class="price_column_right">100</td>
                            </tr>
                            <tr>
                                <td>Nail increasing (gel, acrylic)</td>
                                <td class="price_column_right">from 1000</td>
                            </tr>
                            <tr>
                                <td>Nail correction</td>
                                <td class="price_column_right">from 700</td>
                            </tr>
                            <tr>
                                <td>Removal of artificial nails</td>
                                <td class="price_column_right">from 500</td>
                            </tr>
                            <tr>
                                <td>Gel-lacquer</td>
                                <td class="price_column_right">from 800</td>
                            </tr>
                            <tr>
                                <td>Shellac</td>
                                <td class="price_column_right">from 700</td>
                            </tr>
                            <tr>
                                <td>Nails repair (1 nail)</td>
                                <td class="price_column_right">from 100</td>
                            </tr>
                            <tr>
                                <td>Nails design (1 nail)</td>
                                <td class="price_column_right">from 10</td>
                            </tr>
                            <tr>
                                <td>Removing gel-lacquer</td>
                                <td class="price_column_right">300</td>
                            </tr>
                            <tr>
                                <td>Polish nails</td>
                                <td class="price_column_right">from 50</td>
                            </tr>
                            <tr>
                                <td>Removing lacquer</td>
                                <td class="price_column_right">20</td>
                            </tr>
                            <tr>
                                <td>Covering nails</td>
                                <td class="price_column_right">from 50</td>
                            </tr>
                            <tr>
                                <td>Nail fixing</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Treatment, base</td>
                                <td class="price_column_right">from 30</td>
                            </tr>
                            <tr>
                                <td>Nails drying</td>
                                <td class="price_column_right">50</td>
                            </tr>
                            <tr>
                                <td>Hand mask</td>
                                <td class="price_column_right">from 50</td>
                            </tr>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
