<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<div class="admin_title">
	<h1>Create News</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>