<?php

namespace App\OpenClosed;

require_once 'ShapeCalculator.php';

class Triangle implements ShapeCalculator
{
	private float $base;
	private float $height;

	public function __construct($base, $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	public function area(): float
	{
		return pow($this->height, $this->base) / 2;
	}
}
