<?php

/**
 * Definition and Usage:
 *    The array_diff() function compares the values of
 * two (or more) arrays, and returns the differences.
 *
 *
 * Syntax:
 *    array_diff(array1, array2, array3, ...)
 *
 */

// Example 1:
$arr1 = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$arr2 = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff($arr1, $arr2);

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array 
 * (
 *    [d] => yellow
 * )
 */