<?php
/* @var $this LinkController */
/* @var $model Link */

$this->breadcrumbs=array(
	'Ссылки'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список ссылок', 'url'=>array('index')),
	array('label'=>'Управление ссылками', 'url'=>array('admin')),
);
?>

<h1>Создание ссылки</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>