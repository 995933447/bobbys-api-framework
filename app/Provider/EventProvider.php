<?php 
namespace App\Provider;

use Bobby\Component\Provider\EventProvider as Provider;

/**
 * 事件系统服务提供者
 */
class EventProvider extends Provider
{
	protected $listen = [
		'\\App\\Event\\Example' => '\\App\\Listener\\Example'
	];

	public function register()
	{
		parent::register();
	}

	public function boot()
	{
		parent::boot();
	}
}