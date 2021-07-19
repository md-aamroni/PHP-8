<?php

/**
 * Definition and Usage:
 * 	Constants are like variables except that once they 
 * are defined they cannot be changed or undefined.
 *
 *
 * Syntax:
 * 	define(name, value, case-insensitive)
 * 
 */

// Example 1:
const APP = 'PHP Application';

echo APP;

/**
 * The output of the code above will be:
 * PHP Application
 */


// Example 2:
$storage = 'public/assets/uploads/';
$fruits 	= ['apple', 'banana', 'mango'];

define('Storage', $storage);
define('Fruits', $fruits, true);

print_r(Storage);
echo "\n";
print_r(Fruits);

/**
 * The output of the code above will be:
 * public/assets/uploads/
 * 
 *  Array
 * (
 * 	[0] => apple
 * 	[1] => banana
 * 	[2] => mango
 * )
 */
