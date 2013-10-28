<?php
/* @var $this ActtypeController */
/* @var $model Acttype */

$this->breadcrumbs=array(
	'Acttypes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Acttype', 'url'=>array('index')),
	array('label'=>'Manage Acttype', 'url'=>array('admin')),
);
?>

<h1>Create Acttype</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>