<?php


return [

	'app' => [
		"dbs" => [
			"db_master" => "/../config/db_1.php",
			//"db_master__example" => "/../config/db_1__example.php",
		],
		"lang" => "en",
		//'error_log' => '/var/log/php/php_errors.log'
		'error_log' => __DIR__ . '/../runtime/logs/error.log',

		"authentication" => [		
			"cookies" => [
				"secure" => false,
				"httponly" => true,
			    "samesite" => "strict",			
			],
		],
	],

	'debug_panel' => [
		'panel_url' => 'AdFGFggGHhhHHyhhhbfi9878IK/debug_panhel',
		'allow_ips' => ['127.0.0.1', '::1'],
	],

	'models' => [
		//'error_log' => '/var/log/php/errors_validation.log'
		'error_log' => __DIR__ . '/../runtime/logs/error_validation.log'
	],

	'logger' => [
		'default' => [
			'init' => true
		]
	]
	

];