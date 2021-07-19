<?php

/**
 * Definition and Usage:
 *    The strcmp() function compares two strings.
 *
 *
 * Syntax:
 *    strcmp(string1, string2)
 *
 *
 * Parameter Values:
 *    string1 => Required. Specifies the first string to compare
 *    string2 => Required. Specifies the second string to compare
 *
 */

// Example 1:
$string1 = 'Hello World';
$string2 = 'Hello World!';
echo strcmp($string1, $string2);
# Output => -1
