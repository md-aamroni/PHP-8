<?php

/**
 * Definition and Usage:
 *    The in_array() function searches an array for a specific value.
 *
 *
 * Syntax:
 *    in_array(search, array, type)
 *
 *    search - Required. Specifies the what to search for
 *    array	 - Required. Specifies the array to search
 *    type	 - Optional. If this parameter is set to TRUE, the
 * 				in_array() function searches for the search-string
 * 				and specific type in the array.
 *
 */

// Example 1:
$cars = array('Marcedes Benz', 'Audi', 'Rolls Royce', 'Toyota', 'Land Rover', 'Tesla');
$find = 'Rolls Royce';

if (in_array($find, $cars)) {
	echo $find . ' is listed already';
} else {
	echo $find . ' is not listed yet';
}

/**
 * The output of the code above will be:
 * Rolls Royce is listed already
 *
 */