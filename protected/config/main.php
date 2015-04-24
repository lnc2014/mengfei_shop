<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'梦飞商城-满足你所有的需求',
	//定义北京时间，不然使用date函数的时候会出现时间的误差
	'timeZone'=>'Asia/Shanghai',
	// preloading 'log' component
	'preload'=>array('log'),
	
	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		//后台路由的配置
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			'showScriptName' => false,//是否开启伪静态 
			//具体操作： 
			/* 
			 *  1.开启apache的mod_rewrite模块
				     去掉LoadModule rewrite_module modules/mod_rewrite.so前的“#”符号
				     确保<Directory "..."></Directory>中有“AllowOverride All”
				2.在项目中的/protected/config/main.php中添加代码：
				-----------------------------------------------------------------------------
				'components'=>array(
				           ...
				           'urlManager'=>array(
				                 'urlFormat'=>'path',
				                 'showScriptName'=>false,//注意false不要用引号括上
				           'urlSuffix'=>'.html',
				                 'rules'=>array(
				                     'sites'=>'site/index',
				                 ),
				           ),
				           ...
				       ),
				------------------------------------------------------------------------------
				3.在与index.php文件同级目录下添加文件“.htaccess”，内容如下：   
				----------------------------------------------------------------
			    Options +FollowSymLinks
			    IndexIgnore *\/*  
			    /* RewriteEngine on
			    # if a directory or a file exists, use it directly
			    RewriteCond %{REQUEST_FILENAME} !-f
			    RewriteCond %{REQUEST_FILENAME} !-d
			    # otherwise forward it to index.php
			    RewriteRule . index.php */
// 			 **/
		),
			
		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		//链接本地的数据库，暂时不更新到线上的数据库
		//修改这里的数据库就可以了
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=mengfei_shop',
			'emulatePrepare' => true,
			'username' => 'lnc',
			'password' => '123456',
			'charset' => 'utf8',
		),
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),
	//系统的全局变量
	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName'] 变量的使用方法
	'params'=> require (dirname(__FILE__) . '/params.php'),
);