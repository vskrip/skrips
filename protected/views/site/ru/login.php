<?php
$this->pageTitle=Yii::app()->name . ' - Вход';
$this->breadcrumbs=array(
	'Вход',
);
?>
<div class="page">
	<div class="page_title">
		<img src="../../images/entry.png">
		<h1>Вход</h1>
	</div>
	<div class="page_content">

		<p>Пожалуйста, заполните форму своими регистрационными данными:</p>
		
		<div class="form">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableAjaxValidation'=>true,
		)); ?>
		
			<p class="note">Поля, отмеченные <span class="required">*</span>, обязательны для заполнения.</p>
		
			<div class="row">
				<?php echo $form->labelEx($model,'username'); ?>
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($model,'password'); ?>
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		
			<div class="row rememberMe">
				<?php echo $form->checkBox($model,'rememberMe'); ?>
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		
			<div class="row submit">
				<?php echo CHtml::submitButton('Вход'); ?>
			</div>
		
		<?php $this->endWidget(); ?>
		</div><!-- form -->
	</div>
</div>