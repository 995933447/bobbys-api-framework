<?php 
namespace App\Listener;

use App\Event\Example as Event;

/**
 * 事件监听器示例代码
 */
class Example
{

	public function handle(Event $event)
	{
		echo $event->data . '</br>';
	}

}