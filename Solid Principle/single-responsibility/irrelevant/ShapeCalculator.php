<?php

namespace App\SingleResponsibility;

/**
 * Bad Design Pattern
 *
 * Here the ShapeCalculator class is used to return the
 * multiple types of area calculation.
 *
 * Supposed, we don't need to calculate 'areaOfTriangle()'
 * or a client or someone need only one method and/or not
 * all method, so how could we do this type of stuff?
 *
 * @param int
 * @return string
 */
class ShapeCalculator
{
	protected float $radius;
	protected float $length;
	protected float $height;
	protected float $base;

	public function areaOfSquare($length)
	{
		$this->length = $length;
		echo 'Area of square is = ' . pow($this->length, 2) . PHP_EOL;
	}

	public function areaOfCircle($radius)
	{
		$this->radius = $radius;
		echo 'Area of circle is = ' . sprintf('%.2f', (pi() * $this->radius * $this->radius)) . PHP_EOL;
	}

	public function areaOfTriangle($height, $base)
	{
		$this->height = $height;
		$this->base = $base;
		echo 'Area of triangle is = ' . pow($this->height, $this->base) / 2 . PHP_EOL;
	}
}
