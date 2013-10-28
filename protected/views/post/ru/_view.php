<div class="post">
	<div class="title">
		<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
	</div>
	<div class="author">
		размещено <?php echo $data->author->username . ' ' . date('F j, Y',$data->create_time); ?>
	</div>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			echo $data->mdot;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<b>Тэги:</b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link('Постоянная ссылка', $data->url); ?> |
		<?php echo CHtml::link("Комментарии ({$data->commentCount})",$data->url.'#comments'); ?> |
		Последнее обновление <?php echo date('F j, Y',$data->update_time); ?>
	</div>
</div>
