<?php
/* @var $this ActtypeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Acttypes',
);

$this->menu=array(
	array('label'=>'Create Acttype', 'url'=>array('create')),
	array('label'=>'Manage Acttype', 'url'=>array('admin')),
);
?>

<h1>Acttypes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
