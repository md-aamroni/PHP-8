<?php

/**
 * Definition and Usage:
 *    The current() function returns the value of
 * the current element in an array.
 *
 *
 * Syntax:
 *    current(array)
 *
 *    array - Required. Specifies the array to use
 *
 */

// Example 1:
$cars = array(
   'Rolls Royce', 
   'Marcedes Benz', 
   'Audi', 
   'Toyota', 
   'Land Rover', 
   'Tesla'
);

echo 'The latest car is ' . current($cars);

/**
 * The output of the code above will be:
 * The latest car is Marcedes Benz
 *
 */