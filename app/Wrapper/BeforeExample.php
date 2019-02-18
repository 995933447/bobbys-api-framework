<?php 
namespace App\Wrapper;

class BeforeExample
{

	public function handle(\Closure $next)
	{
		echo "Wrap before example filter</br>";
		$next();
	}

}