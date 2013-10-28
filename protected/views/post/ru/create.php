<?php
$this->breadcrumbs=array(
	'Создать пост',
);
?>
<div class="admin_title">
	<h1>Создание поста</h1>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>