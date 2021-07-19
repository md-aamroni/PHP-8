<?php

/**
 * Definition and Usage:
 *    The reset() function moves the internal
 * pointer to the first element of the array.
 *
 *
 * Syntax:
 *    reset(array)
 *
 *    array - Required. Specifies the array to use
 *
 */

// current()   - returns the value of the current element in an array
// end()       - moves the internal pointer to, and outputs, the last element in the array
// next()      - moves the internal pointer to, and outputs, the next element in the array
// prev()      - moves the internal pointer to, and outputs, the previous element in the array
// each()      - returns the current element key and value, and moves the internal pointer forward

// Example 1:
$people = array(
   "Peter", 
   "Joe", 
   "Glenn", 
   "Cleveland"
);

echo current($people) . "<br/>";
echo next($people) . "<br/>";
reset($people);

/**
 * The output of the code above will be:
 *
 * Peter
 * Joe
 *
 */