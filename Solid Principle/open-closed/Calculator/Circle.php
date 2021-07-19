<?php

namespace App\OpenClosed;

require_once 'ShapeCalculator.php';

class Circle implements ShapeCalculator
{
	private float $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function area(): float
	{
		return pi() * $this->radius * $this->radius;
	}
}
