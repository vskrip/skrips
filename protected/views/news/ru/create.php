<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Новости'=>array('index'),
	'Создание',
);

$this->menu=array(
	array('label'=>'Список новостей', 'url'=>array('index')),
	array('label'=>'Управление новостями', 'url'=>array('admin')),
);
?>

<div class="admin_title">
	<h1>Создание новости</h1>
</div>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>