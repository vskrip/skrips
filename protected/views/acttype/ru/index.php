<?php
/* @var $this ActtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Виды деятельности',
);

$this->menu=array(
	array('label'=>'Создать вид деятельности', 'url'=>array('create')),
	array('label'=>'Управление видом деятельности', 'url'=>array('admin')),
);
?>

<h1>Виды деятельности</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
