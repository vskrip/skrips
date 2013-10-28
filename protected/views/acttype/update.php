<?php
/* @var $this ActtypeController */
/* @var $model Acttype */

$this->breadcrumbs=array(
	'Acttypes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Acttype', 'url'=>array('index')),
	array('label'=>'Create Acttype', 'url'=>array('create')),
	array('label'=>'View Acttype', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Acttype', 'url'=>array('admin')),
);
?>

<h1>Update Acttype <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>