<?php

/**
 * Example of Ordinary Conditional Statement
 *
 * @param int
 * @return float|string
 * @throws Exception
 */
function autoVatAdded($number)
{
	// TODO: Pre Condition
	try {
		if (!is_int($number)) {
			throw new \Exception('Param must be an integer');
		}
	} catch (Exception $e) {
		return $e->getMessage();
	}

	$total = $number + ($number * 0.5);

	// TODO: Post Condition
	try {
		if (!is_float($total)) {
			throw new \Exception('Total must be calculate with vat amount');
		}
	} catch (Exception $e) {
		return $e->getMessage();
	}

	return $total;
}



/**
 * Example of Liskov Conventional Statement
 *
 * @param int
 * @return float|string
 * @throws Exception
 */
function valueAddedTax(int $number): float
{
	return $number + ($number * 0.12);
}



echo autoVatAdded(20);
echo PHP_EOL;
echo valueAddedTax('12.54');
