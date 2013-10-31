<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../yii-1.1.14/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
//debug
defined('YII_DEBUG') or define('YII_DEBUG',true);
//show profiler
defined('YII_DEBUG_SHOW_PROFILER') or define('YII_DEBUG_SHOW_PROFILER',true);
//enable profiling
defined('YII_DEBUG_PROFILING') or define('YII_DEBUG_PROFILING',true);
//trace level
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',0);
//execution time
defined('YII_DEBUG_DISPLAY_TIME') or define('YII_DEBUG_DISPLAY_TIME',true);


require_once($yii);
Yii::createWebApplication($config)->run();

if(YII_DEBUG_DISPLAY_TIME)
echo Yii::getLogger()->getExecutionTime();