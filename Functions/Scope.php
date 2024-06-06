<?php

$price = 93.45;

// TODO: Example of Variable Scope Using Legacy Function
function totalPrice($qty, $cost): string
{
	return 'Total value is = $' . $qty * $cost . PHP_EOL;
}

echo totalPrice(10, $price);





// TODO: Example of Variable Scope Using Lambda Function
$netPrice = function ($qty) use ($price): string {
	return 'Total value is = $' . $qty * $price . PHP_EOL;
};

echo $netPrice(20);





// TODO: Example of Variable Scope Using Arrow Function
$getPrice = fn($qty): string => 'Total value is = $' . $qty * $price . PHP_EOL;

echo $getPrice(30);





// TODO: Example of Variable Scope Using Global Statement
function sellingPrice($qty): string {
	global $price;
	return 'Total value is = $' . $qty * $price . PHP_EOL;
}

echo sellingPrice(40);
