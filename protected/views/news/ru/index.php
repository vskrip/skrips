<?php
/* @var $this NewsController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle=Yii::app()->name.' - '.Yii::t('sblog','News');
$this->breadcrumbs=array(
	'Новости',
);

$this->menu=array(
	array('label'=>'Создание новости', 'url'=>array('create')),
	array('label'=>'Управление новостями', 'url'=>array('admin')),
);
?>
<div class="page">
	<div class="page_title">
		<img src="../../images/newspaperb.png">
		<h1>Новости</h1>
	</div>
</div>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
