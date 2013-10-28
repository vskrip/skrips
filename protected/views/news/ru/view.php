<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'Новости'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'Список новостей', 'url'=>array('index')),
	array('label'=>'Создание новости', 'url'=>array('create')),
	array('label'=>'Обновление новости', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удаление новости', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление новостями', 'url'=>array('admin')),
);
?>
<div class="title">
	<div class="title_news">
		<?php echo $model->title; ?>
	</div>
</div>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array(
			'name'=>'create_time',
			'type'=>'datetime',
			'filter'=>false,
		),
		'content',
	),
)); ?>
