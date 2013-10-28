<?php
$this->breadcrumbs=array(
	$model->title=>$model->url,
	'Обновление',
);
?>

<h1>Обновление <i><?php echo CHtml::encode($model->title); ?></i></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>