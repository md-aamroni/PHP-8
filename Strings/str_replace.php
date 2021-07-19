<?php

/**
 * Definition and Usage:
 *    The str_replace() function replaces some characters
 * with some other characters in a string and also this 
 * function is case-sensitive. 
 *
 *
 * Syntax:
 *    str_replace(find, replace, string, count)
 *
 *
 * Parameter Values:
 *    find     => Required. Specifies the value to find
 *    replace  => Required. Specifies the value to replace the value in find
 *    string   => Required. Specifies the string to be searched
 *    count    => Optional. A variable that counts the number of replacements
 *
 */

// Example 1:
$string = 'Hello World';
echo str_replace($string, 'hello world', 'Hi there...');
# Output => Hi there...



/**
 * Definition and Usage:
 *    The str_ireplace() function replaces some characters 
 * with some other characters in a string and also this 
 * function is case-sensitive. 
 *
 *
 * Syntax:
 *    str_replace(find, replace, string, count)
 *
 *
 * Parameter Values:
 *    find     => Required. Specifies the value to find
 *    replace  => Required. Specifies the value to replace the value in find
 *    string   => Required. Specifies the string to be searched
 *    count    => Optional. A variable that counts the number of replacements
 *
 */

// Example 1:
$string = 'Hello World';
echo str_ireplace($string, 'hello world', 'Hi there...');
# Output => Hi there...