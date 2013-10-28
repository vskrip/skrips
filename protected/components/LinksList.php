<?php

Yii::import('zii.widgets.CPortlet');

class LinksList extends CPortlet
{

	public function init()
	{
		$this->title=CHtml::encode(Yii::t('sblog','Links'));
		parent::init();
	}

	public function getLinksList()
	{
		return Link::model()->getLinksList();
	}

	protected function renderContent()
	{
		$this->render('linksList');
	}
}