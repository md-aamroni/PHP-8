<?php

namespace App\SingleResponsibility;

/**
 * The Circle class is used to calculate area of circle.
 *
 * @param float
 * @return int|float
 */
class Circle
{
	private float $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function area()
	{
		return pi() * $this->radius * $this->radius;
	}
}
