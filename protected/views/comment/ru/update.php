<?php
$this->breadcrumbs=array(
	'Комментарии'=>array('index'),
	'Обновление комментария #'.$model->id,
);
?>

<h1>Обновление комментария #<?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>