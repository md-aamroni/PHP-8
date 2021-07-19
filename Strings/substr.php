<?php

/**
 * Definition and Usage:
 *    The substr() function returns a part of a string.
 *
 *
 * Syntax:
 *    substr(string, start, length)
 *
 *
 * Parameter Values:
 *    string   => Required. Specifies the string to return a part of
 *    start    => Required. Specifies where to start in the string
 *    length   => Optional. Specifies the length of the returned 
 *                string. Default is to the end of the string.
 *
 */

// Example 1:
$string = 'Hello World!';
echo substr($string, 6, 2);
# Output => World!
