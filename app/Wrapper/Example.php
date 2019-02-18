<?php 
namespace App\Wrapper;

class Example
{

	public function handle(\Closure $next)
	{
		echo "Wrap example filter</br>";
		$next();
	}

}