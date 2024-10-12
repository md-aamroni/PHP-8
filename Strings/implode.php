<?php

/**
 * Definition and Usage:
 *    The implode() function returns a string from the elements of an array.
 *
 *
 * Syntax:
 *    implode(separator, array)
 *
 *    separator - Optional. Specifies what to put between the
 *                array elements. Default is "" (an empty string)
 *    array     - Required. The array to join to a string
 *
 */

// Example 1:
$cars = array('Marcedes Benz', 'Audi', 'Rolls Royce', 'Toyota', 'Land Rover', 'Tesla');
echo 'Our stored cars are ' . trim(implode(', ', $cars), ', ');

/**
 * The output of the code above will be:
 * Our stored cars are Marcedes Benz, Audi, Rolls Royce, Toyota, Land Rover, Tesla
 *
 */