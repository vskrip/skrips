<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle=Yii::app()->name . ' - Error';
$this->breadcrumbs=array(
	'Error',
);
?>
<div class="page">
	<div class="page_title">
		<h1>Error <?php echo $code; ?></h1>
	</div>
	<div class="page_content">
		<div class="error">
			<?php echo CHtml::encode($message); ?>
		</div>	
	</div>
</div>