<ul>
	<li><?php echo CHtml::link('Create New Post',array('post/create')); ?></li>
	<li><?php echo CHtml::link('Manage Posts',array('post/admin')); ?></li>
	<li><?php echo CHtml::link('Approve Comments',array('comment/index')) . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
	<li><?php echo CHtml::link('Create News',array('news/create')); ?></li>
	<li><?php echo CHtml::link('Manage News',array('news/admin')); ?></li>
	<li><?php echo CHtml::link('Create Activity',array('acttype/create')); ?></li>
	<li><?php echo CHtml::link('Manage Activities',array('acttype/admin')); ?></li>
	<li><?php echo CHtml::link('Create Link',array('link/create')); ?></li> 
	<li><?php echo CHtml::link('Manage Links',array('link/admin')); ?></li> 
	<li><?php echo CHtml::link('Logout',array('site/logout')); ?></li>
</ul>