<?php
$this->pageTitle=Yii::app()->name . ' - контактная информация';
$this->breadcrumbs=array(
	'Контакт',
);
?>

<div class="page">
	<div class="page_title">
		<img src="../../images/mail.png">
		<h1>Контактная информация</h1>
	</div>
	<div class="page_content">

		<?php if(Yii::app()->user->hasFlash('contact')): ?>
		
		<div class="flash-success">
			<?php echo Yii::app()->user->getFlash('contact'); ?>
		</div>
		
		<?php else: ?>
		
		<p>
		Если у Вас есть деловые предложения или дургие вопросы, пожалуйста, заполните форму для связи со мной. Спасибо.
		</p>
		
		<div class="form">
		
		<?php $form=$this->beginWidget('CActiveForm'); ?>
		
			<p class="note">Поля с пометкой <span class="required">*</span> обязательны для заполнения.</p>
		
			<?php echo $form->errorSummary($model); ?>
		
			<div class="row">
				<?php echo $form->labelEx($model,'name'); ?>
				<?php echo $form->textField($model,'name'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'email'); ?>
				<?php echo $form->textField($model,'email'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'subject'); ?>
				<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'body'); ?>
				<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
			</div>
		
			<?php if(extension_loaded('gd')): ?>
			<div class="row">
				<?php echo $form->labelEx($model,'verifyCode'); ?>
				<div>
				<?php $this->widget('CCaptcha'); ?>
				<?php echo $form->textField($model,'verifyCode'); ?>
				</div>
				<div class="hint">Пожалуйста введите в поле буквы, которые отображены на картинке выше.
				<br/>Буквы не чуствительны к регистру ("А" или "а").</div>
			</div>
			<?php endif; ?>
		
			<div class="row submit">
				<?php echo CHtml::submitButton('Отправить'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		
		</div><!-- form -->
		
		<?php endif; ?>
	</div>
</div>