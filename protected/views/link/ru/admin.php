<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Ссылки'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Список ссылок', 'url'=>array('index')),
	array('label'=>'Создать ссылку', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('link-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Управление ссылками</h1>
<!--TODO: Uncomment if advanced search to need-->
<!--
<p>
Вы можете ввести один из операторов сравнения (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) в начало каждого значения поиска для указания как нужно искать.
</p>
-->
<?php //echo CHtml::link('Расширенный поиск','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'link-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'acttype.name',
		'name',
		'url',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
