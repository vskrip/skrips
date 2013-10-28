<?php

Yii::import('zii.widgets.CPortlet');

class RecentComments extends CPortlet
{
	public $maxComments=10;

	public function init()
	{
		$this->title=CHtml::encode(Yii::t('sblog','Recent Comments'));
		parent::init();
	}
	
	public function getRecentComments()
	{
		return Comment::model()->findRecentComments($this->maxComments);
	}

	protected function renderContent()
	{
		$this->render('recentComments');
	}
}