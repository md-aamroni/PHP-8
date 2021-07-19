<?php

require_once 'ShapeGenerate.php';

class Circle implements ShapeGenerate
{
	public float $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function area()
	{
		$calculate = pi() * $this->radius * $this->radius;
		echo 'Area of circle: ' . sprintf('%.2f', $calculate) . PHP_EOL;
	}
}
