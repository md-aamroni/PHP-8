<?php

namespace App\OpenClosed;

class ShapeGenerator
{
	private array $shapes;

	public function __construct(...$shapes)
	{
		$this->shapes = $shapes;
	}

	public function run()
	{
		foreach ($this->shapes as $shape) {
			if ($shape instanceof \App\OpenClosed\Square) {
				echo 'Area of square = ' . $shape->area() . PHP_EOL;
			} elseif ($shape instanceof \App\OpenClosed\Circle) {
				echo 'Area of circle = ' . sprintf('%.2f', $shape->area()) . PHP_EOL;
			} elseif ($shape instanceof \App\OpenClosed\Triangle) {
				echo 'Area of triangle = ' . $shape->area() . PHP_EOL;
			}
		}
	}
}
