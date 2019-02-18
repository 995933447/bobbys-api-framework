<?php

/**
 * 路由定义示例代码
 */

use Bobby\Component\Proxy\{Route, Request};

Route::get('/', function(){
	echo '<h1 style="position:fixed;left:0;right:0;top:0;bottom:0;margin:auto;width:100%;height:30px;text-align:center;">
	do(9 ^ v ^)9 { Bobby :D\'s frame work started ; } while( 6 _ 6 )
	</h1>';
});

Route::any('/example/{name}/{id}', 'ExampleController::iocExample')->wrappers(['example', 'before', 'after']);

Route::post('/{member}/member', function($member, \StdClass $std) {

	var_dump(Request::get(), $member, $std);

});

Route::group(['wrappers' => ['before', 'example']], function($route) {

	$route->group(['wrappers' => 'after'], function($route) {

		$route->get('/home', function(){
			\Bobby\Component\Proxy\Event::fire(new \App\Event\Example("Event mode example </br>"));
			echo 'This is home .</br>';
		});

	});
});