<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=Yii::app()->name.' - '.Yii::t('sblog','News');
$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>
<div class="page">
	<div class="page_title">
		<img src="../../images/newspaperb.png">
		<h1>News</h1>
	</div>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
