<div class="comment" id="c<?php echo $data->id; ?>">

	<?php echo CHtml::link("#{$data->id}", $data->url, array(
		'class'=>'cid',
		'title'=>'Постоянная ссылка на этот комментарий',
	)); ?>

	<div class="author">
		<?php echo $data->authorLink; ?> оставил комментарий на
		<?php echo CHtml::link(CHtml::encode($data->post->title), $data->post->url); ?>
	</div>

	<div class="time">
		<?php if($data->status==Comment::STATUS_PENDING): ?>
			<span class="pending">Ожидает утверждения</span> |
			<?php echo CHtml::linkButton('Утвердить', array(
				'submit'=>array('comment/approve','id'=>$data->id),
				'params'=>array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken,),
			)); ?> |
		<?php endif; ?>
		<?php echo CHtml::link('Обновить',array('comment/update','id'=>$data->id)); ?> |
		<?php echo CHtml::linkButton('Удалить', array(
			'submit'=>array('comment/delete','id'=>$data->id),
			'params'=>array('YII_CSRF_TOKEN' => Yii::app()->request->csrfToken,),			
			'confirm'=>"Вы уверены, что хотите удалить комментарий #{$data->id}?",
		)); ?> |
		<?php echo date('F j, Y \a\t h:i a',$data->create_time); ?>
	</div>

	<div class="content">
		<?php echo nl2br(CHtml::encode($data->content)); ?>
	</div>

</div><!-- comment -->