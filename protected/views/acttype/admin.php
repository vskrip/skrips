<?php
/* @var $this ActtypeController */
/* @var $model Acttype */

$this->breadcrumbs=array(
	'Acttypes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Acttype', 'url'=>array('index')),
	array('label'=>'Create Acttype', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('acttype-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<h1>Manage Acttypes</h1>

<!--TODO: Uncomment if advanced search to need-->
<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
-->
<?php //echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); ?>
</div>

<!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'acttype-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'name',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
