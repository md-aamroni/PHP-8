<?php

namespace App\SingleResponsibility;

/**
 * The Triangle class is used to calculate area of triangle.
 *
 * @param float
 * @return int|float
 */
class Triangle
{
	private float $base;
	private float $height;

	public function __construct($base, $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	public function area()
	{
		return pow($this->height, $this->base) / 2;
	}
}
