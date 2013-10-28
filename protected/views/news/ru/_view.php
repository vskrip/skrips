<?php
/* @var $this NewsController */
/* @var $data News */
?>

<div class="post">
	<div class="title">
		<?php echo CHtml::link(CHtml::encode($data->title), array('view', 'id'=>$data->id)); ?>
	</div>
	<div class="author">
		размещено <?php echo date('j.m.Y',$data->create_time); ?>
	</div>	
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			echo $data->mdot;
			$this->endWidget();
		?>
	</div>
</div>