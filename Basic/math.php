<?php

/**
 * Definition and Usage:
 *    The PHP math functions are part of the PHP core. No
 * installation is required to use these functions.
 *
 *
 * Contents:
 * 	abs 				— Absolute value
 * 	acos 				— Arc cosine
 * 	acosh 			— Inverse hyperbolic cosine
 * 	asin 				— Arc sine
 * 	asinh 			— Inverse hyperbolic sine
 * 	atan2 			— Arc tangent of two variables
 * 	atan 				— Arc tangent
 * 	atanh 			— Inverse hyperbolic tangent
 * 	base_convert	— Convert a number between arbitrary bases
 * 	bindec 			— Binary to decimal
 * 	ceil 				— Round fractions up
 * 	cos 				— Cosine
 * 	cosh 				— Hyperbolic cosine
 * 	decbin 			— Decimal to binary
 * 	dechex 			— Decimal to hexadecimal
 * 	decoct 			— Decimal to octal
 * 	deg2rad 			— Converts the number in degrees to the radian equivalent
 * 	exp 				— Calculates the exponent of e
 * 	expm1 			— Returns exp(number) - 1, computed in a way that is accurate even when the value of number is close to zero
 * 	fdiv 				— Divides two numbers, according to IEEE 754
 * 	floor 			— Round fractions down
 * 	fmod 				— Returns the floating point remainder (modulo) of the division of the arguments
 * 	getrandmax 		— Show largest possible random value
 * 	hexdec 			— Hexadecimal to decimal
 * 	hypot 			— Calculate the length of the hypotenuse of a right-angle triangle
 * 	intdiv 			— Integer division
 * 	is_finite 		— Finds whether a value is a legal finite number
 * 	is_infinite 	— Finds whether a value is infinite
 * 	is_nan 			— Finds whether a value is not a number
 * 	lcg_value 		— Combined linear congruential generator
 * 	log10 			— Base-10 logarithm
 * 	log1p 			— Returns log(1 + number), computed in a way that is accurate even when the value of number is close to zero
 * 	log 				— Natural logarithm
 * 	max 				— Find highest value
 * 	min 				— Find lowest value
 * 	mt_getrandmax 	— Show largest possible random value
 * 	mt_rand 			— Generate a random value via the Mersenne Twister Random Number Library
 * 	mt_srand 		— Seeds the Mersenne Twister Random Number Library
 * 	octdec 			— Octal to decimal
 * 	pi 				— Get value of pi
 * 	pow 				— Exponential expression
 * 	rad2deg 			— Converts the radian number to the equivalent number in degrees
 * 	rand 				— Generate a random integer
 * 	round 			— Rounds a float
 * 	sin 				— Sine
 * 	sinh 				— Hyperbolic sine
 * 	sqrt 				— Square root
 * 	srand 			— Seed the random number generator
 * 	tan 				— Tangent
 * 	tanh 				— Hyperbolic tangent
 *
 */

// Example 1:
echo "The value of Pi = " . pi() . "<br/>";
echo "The value of Square Root = " . sqrt(16) . "<br/>";
echo "The value of Absolute = " . abs(-45.154) . "<br/>";
echo "The value of Ceil = " . ceil(45.154) . "<br/>";
echo "The value of Round = " . round(45.154) . "<br/>";
echo "The value of Pow = " . pow(12, 2) . "<br/>";
