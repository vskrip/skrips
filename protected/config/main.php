<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Skripacheva S.',
	'timeZone'=>'Europe/Moscow',
	
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		),
		
	'modules'=>array(
			'gii'=>array(
				'class'=>'system.gii.GiiModule',
				'password'=>'rjgthybr',
				'ipFilters'=>array('127.0.0.1'),
		),
	),

	'defaultController'=>'site',

	// Associates a behavior-class with the onBeginRequest event.
	// By placing this within the primary array, it applies to the application as a whole
	'behaviors'=>array(
			'onBeginRequest' => array(
				'class' => 'application.components.behaviors.BeginRequest'
		),
	),
	
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to use a SQLite database
		/*
		'db'=>array(
			'connectionString' => 'sqlite:protected/data/blog.db',
			'tablePrefix' => 'tbl_',
		),
		*/
		'db'=>array(
			'connectionString' => 'mysql:host=192.168.1.23;dbname=sblog',
			'emulatePrepare' => true,
			'enableProfiling' =>YII_DEBUG_PROFILING,
			'username' => 'root',
			'password' => 'rjgthybr',
			'charset' => 'utf8',
			'tablePrefix' => 'tbl_',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
            'errorAction'=>'site/error',
        ),
        'urlManager'=>array(
        	'urlFormat'=>'path',
        	'rules'=>array(
        		'post/<id:\d+>/<title:.*?>'=>'post/view',
        		'posts/<tag:.*?>'=>'post/index',
        		'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
        	),
			'showScriptName'=>false,
        ),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
// 				array(
// 					'class' => 'CWebLogRoute',
//                     'enabled' =>YII_DEBUG_SHOW_PROFILER,
//                     'categories' => 'system.db.*',
// 				),
 			),
		),
		'messages' => array(
			'class' => 'CDbMessageSource',
			'sourceMessageTable'=> 'tbl_sourceMessage',
			'translatedMessageTable'=>'tbl_message',
			'cachingDuration'=>3600,
	   ),
		'request'=>array(
			'enableCookieValidation'=>true,
			'enableCsrfValidation'=>true,
	   ),
		// specify css style CGridView widget assigning
		'widgetFactory'=>array(
		     'widgets'=>array(
		         'CGridView'=>array(
					'cssFile'=>'/css/grid.css',
				),
			),
	   ),
	),
	// internatialization settings
	'sourceLanguage'=>'en',
	//'language'=>'ru',
	
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>require(dirname(__FILE__).'/params.php'),
);