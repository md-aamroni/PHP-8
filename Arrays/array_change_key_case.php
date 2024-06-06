<?php

/**
 * Definition and Usage:
 *    The array change key case() function returns an array
 * with all array KEYS in lower case or upper case.
 *
 *
 * Syntax:
 *    array_change_key_case(array, case)
 *
 *    array   -   Required. Specifies the array to use
 *    case    -   Optional. Possible values
 *                   1. CASE_LOWER - Default value. Changes the keys to lowercase
 *                   2. CASE_UPPER - Changes the keys to uppercase
 *
 */

// Example 1:
$userAges = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

echo '<pre>';
print_r(array_change_key_case($userAges, CASE_UPPER));
print_r(array_change_key_case($userAges, CASE_LOWER));
print_r(array_change_key_case($userAges));
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [PETER] => 35
 *    [BEN] => 37
 *    [JOE] => 43
 * )
 *
 * Array
 * (
 *    [peter] => 35
 *    [ben] => 37
 *    [joe] => 43
 * )
 *
 * Array
 * (
 *    [peter] => 35
 *    [ben] => 37
 *    [joe] => 43
 * )
 */