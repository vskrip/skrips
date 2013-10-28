<?php
Yii::import('zii.widgets.jui.CJuiDatePicker');

class WorkingCalendar extends CJuiDatePicker
{

	public function init()
	{
		//TODO: Настроить отображение элемента по ширине контейнера. Опция autoSize не работает.
		$this->name = 'workCalendar';
		// $this->model=Post::model()->findAll();
		// $this->value='create_time';
		$this->options=array(
			'showAnim'=>'fold',
			'autoSize'=> TRUE,
		);
		$this->htmlOptions = array(
			//'style'=>'width:50px;'
		);
		$this->flat = TRUE;
		$this->language = Yii::app()->language;
		parent::init();
	}

	protected function renderContent()
	{
		//TODO: Настроить вывод заголовка над рабочим календарем. Нужен заголовок, как у Portlet
		$this->render('workingCalendar');
	}
}