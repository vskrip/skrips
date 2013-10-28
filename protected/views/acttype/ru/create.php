<?php
/* @var $this ActtypeController */
/* @var $model Acttype */

$this->breadcrumbs=array(
	'Виды деятельности'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Список видов деятельности', 'url'=>array('index')),
	array('label'=>'Управление видами деятельности', 'url'=>array('admin')),
);
?>

<h1>Создание вида деятельности</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>