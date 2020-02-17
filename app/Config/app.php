<?php
return [
	//是否开启debug调试模式
	'debug' => true,
	//默认时区
	'timezone'  => 'Asia/Shanghai',
	//是否开启配置文件缓存
	'config_cache' => [
		'is_open' => false,
	],
	//框架日志配置
	'log' => [
		'record_exception' => true,
		'path' => __DIR__ . '/../Log'
	],
	//路由控制器命名空间
	'route' => [
		'namespace' => '\\App\\Controller\\',
		'file' => __DIR__ . '/../Route/route.php',
		'persistence' => [
			//注意:开启路由缓存请一定保证没有定义闭包模式路由,目前仅支持控制器模式路由缓存,并且保证PHP已经安装apcu拓展 (原因:使用了apcu进行了高速缓存,php无法序列化存储闭包.有一些开源php库开源序列化闭包,但是会消耗一定性能,所有采用原生的apcu进行高速缓存)
			'persistent' => false, 
			'key' => __FILE__
		] 
	],
	//服务提供者缓存配置
	'providers_cache' => [
		'is_open' => false,
		'file' => __DIR__ . '/../Cache/providers.php'
	],
	//服务提供者
	'providers' => [
		'\\Bobby\\Component\\Provider\\RouteProvider',
		'\\Bobby\\Component\\Provider\\DBProvider',
		'\\App\\Provider\\EventProvider',
		'\\App\\Provider\\WrapperProvider'
	]
];