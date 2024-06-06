<?php

/**
 * Definition and Usage:
 *    The strpos() function finds the position of the first 
 * occurrence of a string inside another string and also this
 * function is case-sensitive.
 *
 *
 * Syntax:
 *    strpos(string, find, start)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to search
 *    find   => Required. Specifies the string to find
 *    start  => Optional. Specifies where to begin the search
 *
 */

// Example 1:
$string = "As a appliction developer, php is the best technology where I used to";
echo stripos($string, 'php');
# Output => 27



/**
 * Definition and Usage:
 *   The stripos() function finds the position of the first 
 * occurrence of a string inside another string and also this
 * function is case-insensitive.
 *
 *
 * Syntax:
 *    stripos(string, find, start)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to search
 *    find   => Required. Specifies the string to find
 *    start  => Optional. Specifies where to begin the search
 *
 */

// Example 1:
$string = "As a appliction developer, php is the best technology where I used to";
echo stripos($string, 'PHP');
# Output => 27



/**
 * Definition and Usage:
 *   The strrpos() function finds the position of the last 
 * occurrence of a string inside another string. and also this
 * function is case-sensitive.
 *
 *
 * Syntax:
 *    stripos(string, find, start)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to search
 *    find   => Required. Specifies the string to find
 *    start  => Optional. Specifies where to begin the search
 *
 */

// Example 1:
$string = "As a appliction developer, php is the best technology where I used to in php";
echo strrpos($string, 'php');
# Output => 73

