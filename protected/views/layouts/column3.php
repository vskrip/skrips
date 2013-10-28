<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="wrapper">
	<div id="content">
		<?php echo $content; ?>
	</div>
	<!-- content -->
</div>
<div class="sidebar_left">
	<div>
		<?php $this->widget('LinksList'); ?>
	</div>
	<!-- sidebar left -->
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
	<!--TODO: Настроить корректное отображение виджета рабочего календаря-->
	<!--<div><?php $this->widget('WorkingCalendar'); ?></div>-->
	</div>
	<!-- sidebar right-->
</div>

<?php $this->endContent(); ?>