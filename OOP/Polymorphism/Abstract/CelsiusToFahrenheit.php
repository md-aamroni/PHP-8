<?php

require_once 'Temperature.php';

class CelsiusToFahrenheit extends Temperature
{
	public float $celsius;

	public function __construct($celsius)
	{
		$this->celsius = $celsius;
	}

	public function calculate()
	{
		$calculate = $this->celsius * (9.0 / 5.0) + 32.0;
		echo 'Temperature of °F: ' . $calculate . PHP_EOL;
	}
}
