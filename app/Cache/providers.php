<?php
	return array (
  'providers' => 
  array (
    0 => '\\Bobby\\Component\\Provider\\RouteProvider',
    1 => '\\App\\Provider\\EventProvider',
    2 => '\\App\\Provider\\WrapperProvider',
  ),
  'eager' => 
  array (
    0 => '\\Bobby\\Component\\Provider\\RouteProvider',
    1 => '\\App\\Provider\\EventProvider',
  ),
  'deffer' => 
  array (
    'example' => '\\App\\Provider\\WrapperProvider',
    'before' => '\\App\\Provider\\WrapperProvider',
    'after' => '\\App\\Provider\\WrapperProvider',
  ),
);