<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Ссылки'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Обновление',
);

$this->menu=array(
	array('label'=>'Список ссылко', 'url'=>array('index')),
	array('label'=>'Создание ссылку', 'url'=>array('create')),
	array('label'=>'Просмотр ссылки', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h1>Обновление ссылки <?php echo $model->name; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>