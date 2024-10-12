<?php
	
try {
	if (is_int($argc) && $argc > 1) {
		$fileNames = $argv[2];
		$resources = '$id';
		$directory = ucwords(str_replace('make:', '', $argv[1])) . 's';
		$filesData = null;
		
		if ($argv[1] === "make:model") {
			$filesData = <<<code
<?php

namespace App\Models;

use App\Illuminate\Models\TestModel;
use App\Illuminate\Request\ServiceRequest;

class $fileNames
{
	// TODO: Do some code here...
}
code;
		} 
		
		if ($argv[1] === "make:controller") {
			$filesData = <<<code
<?php

namespace App\Controllers;

use App\Illuminate\Models\TestModel;
use App\Illuminate\Request\ServiceRequest;

class $fileNames
{
	// TODO: Do some code here...
}
code;
		} 
		
		if ($argv[1] === "make:controller" && $argv[3] === "-r") {
			$filesData = <<<code
<?php

namespace App\Controllers;

use App\Illuminate\Models\TestModel;
use App\Illuminate\Request\ServiceRequest;

class $fileNames
{
	public function index()
	{
		// TODO: Do some code here...
	}
	
	public function create()
	{
		// TODO: Do some code here...
	}
	
	public function store()
	{
		// TODO: Do some code here...
	}
	
	public function edit($resources)
	{
		// TODO: Do some code here...
	}
	
	public function delete($resources)
	{
		// TODO: Do some code here...
	}
}
code;
		}
		
		if (file_exists('app/'. $directory .'/'. $argv[2] .'.php')) {
			echo 'Oops! is already existed';
		} else {
			if (file_put_contents('app/'. $directory .'/'. $argv[2] .'.php', $filesData)) {
				echo $fileNames . ' is created successfully';
			} else {
				echo 'Oops! something went wrong, please try again';
			}
		}
	
	} else {
		throw new Exception(
			"Please use the following command..." . PHP_EOL .
			"make:model		Create a new model" . PHP_EOL .
			"make:controller		Create a new controller" . PHP_EOL .
			"make:controller -r	Create a new controller resources" . PHP_EOL
		);
	}	
} catch (Exception $e) {
	print($e->getMessage());
}