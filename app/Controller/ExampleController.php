<?php
namespace App\Controller;

use Bobby\Component\Proxy\Request;

/**
 * 控制器示例代码
 */
class ExampleController
{
	public function iocExample($name, $id, \StdClass $std, $default = 'ioc')
	{
	   	var_dump($name, $id, $std, $default, Request::get());
	}
}