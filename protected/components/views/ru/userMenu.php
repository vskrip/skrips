<ul>
	<li><?php echo CHtml::link('Создать новый пост',array('post/create')); ?></li>
	<li><?php echo CHtml::link('Управление постами',array('post/admin')); ?></li>
	<li><?php echo CHtml::link('Утвердить комментарии',array('comment/index')) . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
	<li><?php echo CHtml::link('Создать новость',array('news/create')); ?></li>
	<li><?php echo CHtml::link('Управление новостями',array('news/admin')); ?></li>
	<li><?php echo CHtml::link('Создать вид деятельности',array('acttype/create')); ?></li>
	<li><?php echo CHtml::link('Управление видами деятельности',array('acttype/admin')); ?></li>
	<li><?php echo CHtml::link('Создать ссылку',array('link/create')); ?></li>
	<li><?php echo CHtml::link('Управление ссылками',array('link/admin')); ?></li>
	<li><?php echo CHtml::link('Выход',array('site/logout')); ?></li>
</ul>