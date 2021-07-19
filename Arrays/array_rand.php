<?php

/**
 * Definition and Usage:
 *    The array_rand() function returns a random key
 * from an array, or it returns an array of random keys
 * if you specify that the function should return more
 * than one key.
 *
 *
 * Syntax:
 *    array_rand(array, number)
 *
 *    array  - Required. Specifies an array
 *    number - Optional. Specifies how many random keys to return
 *
 */

// Example 1:
$fruits = array('Apple', 'Banana', 'Mango', 'Lemon', 'Orange', 'Stawberry', 'BlackBerry');
$result = array_rand($fruits, 4);

echo $fruits[$result[0]] . "<br/>";
echo $fruits[$result[1]] . "<br/>";
echo $fruits[$result[2]] . "<br/>";
echo $fruits[$result[3]] . "<br/>";

/**
 * The output of the code above will be:
 *
 * Banana
 * Mango
 * BlackBerry
 * Orange
 *
 * n:b: your result might be differntiate each time
 *
 */