<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Новости'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Обновление',
);

$this->menu=array(
	array('label'=>'Список новостей', 'url'=>array('index')),
	array('label'=>'Создание новости', 'url'=>array('create')),
	array('label'=>'Просмотр новости', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление новостями', 'url'=>array('admin')),
);
?>

<div class="page">
	<div class="title">Обновление новости # <?php echo $model->title; ?>
	</div>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>