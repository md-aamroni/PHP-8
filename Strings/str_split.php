<?php

/**
 * Definition and Usage:
 *    The str_split() function splits a string into an array.
 *
 *
 * Syntax:
 *    str_split(string, length)
 *
 *
 * Parameter Values:
 *    string   => Required. Specifies the string to split
 *    length   => Optional. Specifies the length of each array element. Default is 1
 *
 */

// Example 1:
$string = 'Hello World';
echo '<pre>';
print_r(str_split($string));
echo '</pre>';
# Output => Array ([0] => H [1] => e [2] => l [3] => l [4] => o [5] => [6] => W [7] => o [8] => r [9] => l [10] => d)
