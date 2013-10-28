<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Ссылки'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список ссылок', 'url'=>array('index')),
	array('label'=>'Создание ссылки', 'url'=>array('create')),
	array('label'=>'Обновление ссылки', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удаление ссылки', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы действительно уверены в том, что хотите удалить этот элемент?')),
	array('label'=>'Упрвление ссылками', 'url'=>array('admin')),
);
?>

<h1>Просмотр ссылки #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'acttype.name',
		'name',
		'url',
	),
)); ?>
