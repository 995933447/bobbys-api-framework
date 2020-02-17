<?php 
namespace App\Wrapper;

class AfterExample
{

	public function handle(\Closure $next, $isAfter = 'after')
	{
		$next();
		var_dump($isAfter);
		echo "Wrap after example filter</br>";
	}

}