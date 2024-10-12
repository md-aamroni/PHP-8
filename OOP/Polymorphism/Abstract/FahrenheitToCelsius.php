<?php

require_once 'Temperature.php';

class FahrenheitToCelsius extends Temperature
{
	public float $fahrenheit;

	public function __construct($fahrenheit)
	{
		$this->fahrenheit = $fahrenheit;
	}

	public function calculate()
	{
		$calculate = ($this->fahrenheit - 32.0) * 5.0 / 9.0;
		echo 'Temperature of °C: ' . $calculate . PHP_EOL;
	}
}
