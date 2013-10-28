<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="wrapper">
	<div id="content_left_center">
		<?php echo $content; ?>
	</div>
	<!-- content -->
</div>
<div>
	<div class="sidebar_right">
		<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

		<?php $this->widget('TagCloud', array(
				'maxTags'=>Yii::app()->params['tagCloudCount'],
	)); ?>

		<?php $this->widget('RecentComments', array(
				'maxComments'=>Yii::app()->params['recentCommentCount'],
	)); ?>
	</div>
	<!-- sidebar -->
</div>
<?php $this->endContent(); ?>