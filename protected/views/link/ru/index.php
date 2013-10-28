<?php
/* @var $this LinkController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ссылки',
);

$this->menu=array(
	array('label'=>'Создание ссылки', 'url'=>array('create')),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h1>Ссылки</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
