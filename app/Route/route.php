<?php

/**
 * 路由定义示例代码
 */

use Bobby\Component\Proxy\{Route, Request, DB};

Route::get('/', function(){
	echo '<h1 style="position:fixed;left:0;right:0;top:0;bottom:0;margin:auto;width:100%;height:30px;text-align:center;">
	do(9 ^ v ^)9 { Bobby :D\'s frame work started ; } while( 6 _ 6 )
	</h1>';
});

Route::any('/example/{name}/{id}', 'ExampleController::iocExample')->wrappers(['example', 'before', 'after']);

Route::any('/{member}/member', function($member, \StdClass $std) {

	var_dump(Request::get(), $member, $std);

});

Route::group(['wrappers' => ['before', 'example']], function($route) {

	$route->group(['wrappers' => 'after'], function($route) {

		$route->get('/home', function(){

			\Bobby\Component\Proxy\Event::fire(new \App\Event\Example("Event mode example </br>"));

			echo 'This is home .</br>';

			//ORM部分示例
			$sql = DB::table('test')
    				->column(['title'])
    				->where(function($query) {
        				$query->where('title', 'yo')
        				->where('id', 'in', ['2'], 'or')
        			->limit(2)
        			->offset(2);
    				})
    				->where('data', 'ok')
    				->whereRaw('tt = ?', ['haha'])
    				->join('auth_rule', function($query) {
        				$query->on('auth_rule.name', '=', 'test.title')
    					->and('test.id', 'in', [8,9]);
    				}, null, null, 'LEFT')
    				->join('auth_item', 'test.title', '=', 'auth_rule.name')
    				->orderBy('id')
    				->orderBy('title', 'DESC')
    				->groupBy(['title'])
    				->having('ok', '>', 2)
    				//->select(); //单条记录可以使用find方法
    				->getSql();

    			echo 'Testing sql : ' . $sql . '</br></br>';

    			$query = DB::table('test')->where('title', 'hahah');
    			echo DB::table('test')->where('id', '=', 1)->union($query)->getSql();
    			// DB::query('SELECT * FROM test');
    			// 
    			// DB::table('test')->insert(['title' => 'hello']);
 
    			// DB::table('test')
    			// 	  ->join('auth_rule', function($query) {
    			//           $query->on('auth_rule.name', '=', 'test.title')->and('test.id', 'in', [8,9]);
    			//         })
    			//     ->where('id', 11)
    			//     ->update(['title' => 'oo', 'id' => 60]);
    			//         
    			// DB::update("UPDATE test SET title = 'bobby' WHERE id = 25");
    			// 
    			// DB::table('test')
    			// 	  ->join('auth_rule', function($query) {
    			//           $query->on('auth_rule.name', '=', 'test.title')->and('test.id', 'in', [8,9]);
    			//    })->where('id', 11)->delete();
    			//         
    			// DB::delete('DELETE FROM test WHERE id = 7');
    			// 
    			// DB::table('test')->where('id', 25)->decrement(['id' => 1]);
    			

		});

	});
});