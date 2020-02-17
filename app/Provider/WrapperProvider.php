<?php
namespace App\Provider;

use Bobby\Component\Provider\WrapperProvider as Provider;

/**
 * 包装器服务提供者
 */
class WrapperProvider extends Provider
{
	public $isDeffer = true;

	protected $wrap = [
		'example' => '\\App\\Wrapper\\Example',
		'before' => '\\App\\Wrapper\\BeforeExample',
		'after' => '\\App\\Wrapper\\AfterExample',
	];

	public $provide = ['example', 'before', 'after'];

	public function register()
	{
		parent::register();
	}

	public function boot()
	{
		parent::boot();
	}
}