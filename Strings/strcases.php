<?php

/**
 * Definition and Usage:
 *    The strtolower() function converts a string to lowercase.
 *
 *
 * Syntax:
 *    strtolower(string)
 *
 *
 * Parameter Values:
 *    string =>   Required. Specifies the string to convert
 *
 */

// Example 1:
$string = "Hello WORLD <br/>";
echo strtolower($string);
# Output => hello world



/**
 * Definition and Usage:
 *    The strtoupper() function converts a string to uppercase.
 *
 *
 * Syntax:
 *    strtoupper(string)
 *
 *
 * Parameter Values:
 *    string =>   Required. Specifies the string to convert
 *
 */

// Example 1:
$string = "Hello world <br/>";
echo strtoupper($string);
# Output => HELLO WORLD



/**
 * Definition and Usage:
 *    The ucwords() function converts the first character 
 * of each word in a string to uppercase.
 *
 *
 * Syntax:
 *    ucwords(string, delimiters)
 *
 *
 * Parameter Values:
 *    string     => Required. Specifies the string to convert
 *    delimiters => Optional. Specifies the word separator character
 *
 */

// Example 1:
$string = "hello world <br/>";
echo ucwords($string);
echo ucwords('hey| john', '|');
# Output => Hello World


