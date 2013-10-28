<?php
/* @var $this ActtypeController */
/* @var $model Acttype */

$this->breadcrumbs=array(
	'Виды деятельности'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Обновить',
);

$this->menu=array(
	array('label'=>'Список видов деятельности', 'url'=>array('index')),
	array('label'=>'Создать вид деятельности', 'url'=>array('create')),
	array('label'=>'Просмотр вида деятельности', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление видами деятельности', 'url'=>array('admin')),
);
?>

<h1>Обновление вида деятельности <i><?php echo $model->name; ?></i></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>