<?php

/**
 * Definition and Usage:
 *    There are two basic ways to get output: echo and print.
 *
 *
 * Statements:
 *    1. The echo statement can be used with or without parentheses: echo or echo()
 *    2. The print statement can be used with or without parentheses: print or print()
 *    3. The printf() function outputs a formatted string.
 *    4. The print_r() function prints the information about a variable in a more human-readable way.
 *    5. The var_dump() function dumps information about one or more variables. The information holds type and value of the variable(s).
 *
 * Additional:
 *    1. The gettype() function returns the type of a variable.
 *
 */

$fullName = 'John Doe';
$format   = 'Hey %s, are you %d years old?';
$color    = 'Red';
$fruits   = ['apple', 'banana', 'mango'];
$users    = array(
   'rahim' => ['abdur rahim', 30],
   'karim' => ['karim hossain', 25],
   'himel' => ['himel ahmed', 30],
);

// Example 01: echo
echo 'John Doe';
echo $fullName;
echo ($fullName);


// Example 02: print
print 'John Doe';
print $fullName;
print($fullName);


// Example 03: printf()
printf($format, 'Kabir khan', 30);


// Example 04: print_r()
print_r($fruits);

echo '<pre>';
print_r($users);
echo '</pre>';


// Example 05: var_dump()
echo '<pre>';
var_dump($users);
echo '</pre>';


// Example 06: Variables Type
echo gettype($variable);


// Example 07: Print Out Variables
echo "\$color = " . $color;