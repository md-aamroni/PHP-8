<?php

require_once 'ShapeGenerate.php';

class Triangle implements ShapeGenerate
{
	public float $base;
	public float $height;

	public function __construct($base, $height)
	{
		$this->base = $base;
		$this->height = $height;
	}

	public function area()
	{
		$calculate = ($this->base * $this->height) / 2;
		echo 'Area of triangle: ' . sprintf('%.2f', $calculate) . PHP_EOL;
	}
}
