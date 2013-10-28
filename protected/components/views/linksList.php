<ul>
	<?php foreach($this->getLinksList() as $link): ?>
	<li><?php echo CHtml::link(CHtml::encode($link->name), $link->url, array('target'=>'_blank')); ?></li>
	<?php endforeach; ?>
</ul>