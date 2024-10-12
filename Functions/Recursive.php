<?php

// TODO: Example of Basic Recursion
function increment(int $num)
{
	if ($num <= 5) {
		echo $num . PHP_EOL;
		increment($num + 1);
	}
}

//increment(1);





// TODO: Example of Factorial Recursion
function factorial(int $num)
{
	if ($num === 0) {
		return 1;
	} else {
		return ($num * factorial($num - 1));
	}
}

//echo factorial(5) . PHP_EOL;





// TODO: Example of Array Recursion
//$fruits = ['Kabir Khan', 'kabir.khan@gmail.com', '+880 1316-440504', 'Software Developer', 'ABC International Company Limited'];
//function printArray($arr, $length = 0)
//{
//	if ($length === 0) {
//		$length = count($arr);
//	}
//
//	if ($length > 0) {
//		echo $arr[$length - 1] . PHP_EOL;
//		$length--;
//		if ($length === 0) {
//			exit();
//		}
//		printArray($arr, $length);
//	}
//}
//
//printArray($fruits);


$fruits = ['Kabir Khan', 'kabir.khan@gmail.com', '+880 1316-440504', 'Software Developer', 'ABC International Company Limited'];
function printArray($arr, $length = 0, $len = 0)
{
	if ($length === 0) {
		$length = count($arr);
	}

	$size = count($arr);
	if (($len < $size) && ($length > 0)) {
		echo $arr[$len] . PHP_EOL;
		$length--;
		$len++;
		if (($length === 0) && ($len = $size)) {
			exit();
		}
		printArray($arr, $length, $len);
	}
}
printArray($fruits);




// TODO: Example of Fibonacci Recursion
//function Fibonacci($number)
//{
//	if ($number == 0) {
//		return 0;
//	} else if ($number == 1) {
//		return 1;
//	} else {
//		return (Fibonacci($number - 1) + Fibonacci($number - 2));
//	}
//}
//
//
//$number = 10;
//for ($counter = 0; $counter < $number; $counter++) {
//	echo Fibonacci($counter), ' ';
//}


function Fibonacci($number, $a = 0, $b = 1)
{
	if ($number != 0) {
		echo !empty($a) ? " " . $a : 0;
		$summation = (!empty($a) ? $a : 0) + (!empty($b) ? $b : 1);
		$a = (!empty($b) ? $b : 1);
		$b = (!empty($summation) ? $summation : 0);
		$number--;
		Fibonacci($number, $a, $b);
	}
}

//Fibonacci(20);
