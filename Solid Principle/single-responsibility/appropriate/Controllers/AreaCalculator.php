<?php

namespace App\SingleResponsibility;

/**
 * The AreaCalculator class is used to calculate the
 * area of shape as per requirement or based on object
 * as well to create an object.
 *
 * @param object
 * @return string|false
 */
class AreaCalculator
{
	protected array $shapes;

	public function __construct(...$shapes)
	{
		$this->shapes = $shapes;
	}

	public function shapeGenerate(): void
	{
		foreach ($this->shapes as $shape) {
			if ($shape instanceof \App\SingleResponsibility\Square) {
				echo 'Area of square = ' . $shape->area() . PHP_EOL;
			} elseif ($shape instanceof \App\SingleResponsibility\Circle) {
				echo 'Area of circle = ' . sprintf('%.2f', $shape->area()) . PHP_EOL;
			} elseif ($shape instanceof \App\SingleResponsibility\Triangle) {
				echo 'Area of triangle = ' . $shape->area() . PHP_EOL;
			}
		}
	}
}
