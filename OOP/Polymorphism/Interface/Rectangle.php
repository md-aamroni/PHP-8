<?php

require_once 'ShapeGenerate.php';

class Rectangle implements ShapeGenerate
{
	public float $length;
	public float $width;

	public function __construct($length, $width)
	{
		$this->length = $length;
		$this->width = $width;
	}

	public function area()
	{
		$calculate = $this->length * $this->width;
		echo 'Area of rectangle: ' . sprintf('%.0f', $calculate) . PHP_EOL;
	}
}
