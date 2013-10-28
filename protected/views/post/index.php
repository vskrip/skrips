<?php
$this->pageTitle=Yii::app()->name.' - '.Yii::t('sblog','Articles');
$this->breadcrumbs=array(
	'Articles',
);
?>
<?php if(!empty($_GET['tag'])): ?>
<h1>Posts Tagged with <i><?php echo CHtml::encode($_GET['tag']); ?></i></h1>
<?php endif; ?>
<div class="page">
	<div class="page_title">
		<img src="../../images/articles.png">
		<h1>Articles</h1>
	</div>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
