<?php
$this->breadcrumbs=array(
	'Create Post',
);
?>
<div class="admin_title">
	<h1>Create Post</h1>
</div>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>