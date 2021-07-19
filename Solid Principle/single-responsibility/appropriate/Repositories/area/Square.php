<?php

namespace App\SingleResponsibility;

/**
 * The Square class is used to calculate area of square.
 *
 * @param float
 * @return int|float
 */
class Square
{
	private float $length;

	public function __construct($len)
	{
		$this->length = $len;
	}

	public function area()
	{
		return pow($this->length, 2);
	}
}
