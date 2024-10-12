<?php

/**
 * Definition and Usage:
 *    The str_repeat() function repeats a string a specified number of times.
 *
 *
 * Syntax:
 *    str_repeat(string, repeat)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to repeat
 *    repeat => Required. Specifies the number of times the string will
 *                  be repeated. Must be greater or equal to 0
 *
 */

// Example 1:
$string = 'Hello World <br/>';
echo str_repeat($string, 5);
# Output => Hello World Hello World Hello World Hello World Hello World