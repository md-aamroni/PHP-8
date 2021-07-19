<?php

/**
 * Definition and Usage:
 *    The end() function moves the internal pointer
 * to, and outputs, the last element in the array.
 *
 *
 * Syntax:
 *    end(array)
 *
 *    array - Required. Specifies the array to use
 *
 */

// Example 1:
$cars = array(
   'Marcedes Benz', 
   'Audi', 
   'Rolls Royce', 
   'Toyota', 
   'Tesla',
   'Land Rover', 
);

echo 'The latest car is ' . end($cars);

/**
 * The output of the code above will be:
 * The latest car is Tesla
 *
 */