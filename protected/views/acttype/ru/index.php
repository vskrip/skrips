<?php
/* @var $this ActtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Виды деятельности',
);
?>

<h1>Виды деятельности</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
