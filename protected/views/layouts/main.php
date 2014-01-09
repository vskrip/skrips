<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"></div>
		<div id="language-selector">
    		<?php 
        		$this->widget('application.components.widgets.LanguageSelector');
    		?>
		</div>
	</div><!-- header -->
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>Yii::t('sblog','Home'), 'url'=>array('site/page', 'view'=>'home')),
				array('label'=>Yii::t('sblog','Services'), 'url'=>array('site/page', 'view'=>'services')),
				array('label'=>Yii::t('sblog','Price'), 'url'=>array('site/page', 'view'=>'price')),
				array('label'=>Yii::t('sblog','News'), 'url'=>array('news/index')),
				array('label'=>Yii::t('sblog','Articles'), 'url'=>array('post/index')),
				array('label'=>Yii::t('sblog','Gallery'), 'url'=>array('site/page', 'view'=>'galery')),
				array('label'=>Yii::t('sblog','Sign Up'), 'url'=>array('site/page', 'view'=>'signup')),
				array('label'=>Yii::t('sblog','About Cabinet'), 'url'=>array('site/page', 'view'=>'about_cab')),
				array('label'=>Yii::t('sblog','About Us'), 'url'=>array('site/page', 'view'=>'about_us')),
				array('label'=>Yii::t('sblog','Contactes'), 'url'=>array('site/contact')),
				array('label'=>Yii::t('sblog','Login'), 'url'=>array('site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>Yii::t('sblog','Logout').' ('.Yii::app()->user->name.')', 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		<?php echo Yii::t('sblog', 'Copyright'); ?> &copy; <?php echo date('Y'); ?> <?php echo Yii::t('sblog', 'by Vladimir A. Skripachev'); ?><br/>
		<?php echo Yii::t('sblog', 'All Rights Reserved.'); ?><br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
</body>
</html>
