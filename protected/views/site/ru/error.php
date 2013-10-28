<?php
$this->pageTitle=Yii::app()->name . ' - Ошибка';
$this->breadcrumbs=array(
	'Ошибка',
);
?>
<div class="page">
	<div class="page_title">
		<h1>Ошибка <?php echo $code; ?></h1>
	</div>
	<div class="page_content">
		<div class="error">
			<?php echo CHtml::encode($message); ?>
		</div>
	</div>
</div>