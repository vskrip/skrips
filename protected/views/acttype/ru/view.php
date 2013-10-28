<?php
/* @var $this ActtypeController */
/* @var $model Acttype */

$this->breadcrumbs=array(
	'Виды деятельности'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Список видов деятельности', 'url'=>array('index')),
	array('label'=>'Создать вид деятельности', 'url'=>array('create')),
	array('label'=>'Обновить вид деятельности', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить вид деятельности', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы действительно уверены в том, что хотите удалить этот элемент?')),
	array('label'=>'Управление видами деятельности', 'url'=>array('admin')),
);
?>

<h1>Просмотр вида деятельности #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
	),
)); ?>
