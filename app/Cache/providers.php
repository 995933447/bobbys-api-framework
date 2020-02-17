<?php
	return array (
  'providers' => 
  array (
    0 => '\\Bobby\\Component\\Provider\\RouteProvider',
    1 => '\\Bobby\\Component\\Provider\\DBProvider',
    2 => '\\App\\Provider\\EventProvider',
    3 => '\\App\\Provider\\WrapperProvider',
  ),
  'eager' => 
  array (
    0 => '\\Bobby\\Component\\Provider\\RouteProvider',
    1 => '\\App\\Provider\\EventProvider',
  ),
  'deffer' => 
  array (
    'DB' => '\\Bobby\\Component\\Provider\\DBProvider',
    'example' => '\\App\\Provider\\WrapperProvider',
    'before' => '\\App\\Provider\\WrapperProvider',
    'after' => '\\App\\Provider\\WrapperProvider',
  ),
);