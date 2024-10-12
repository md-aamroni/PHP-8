<?php

namespace App\OpenClosed;

require_once 'ShapeCalculator.php';

class Square implements ShapeCalculator
{
	private float $length;

	public function __construct($length)
	{
		$this->length = $length;
	}

	public function area(): float
	{
		return pow($this->length, 2);
	}
}
