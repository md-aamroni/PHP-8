<?php

/**
 * Definition and Usage:
 *    The trim() function removes whitespace and other 
 * predefined characters from both sides of a string.
 *
 *
 * Syntax:
 *    trim(string, charlist)
 *
 *
 * Parameter Values:
 *    string   => Required. Specifies the string to check
 *    charlist => Optional. Specifies which characters to remove 
 *                from the string. If omitted, all of the following 
 *                characters are removed:
 *             
 *                "\0" - NULL
 *                "\t" - tab
 *                "\n" - new line
 *                "\x0B" - vertical tab
 *                "\r" - carriage return
 *                " " - ordinary white space
 *
 */

// Example 1:
$string = ' Hello World! ';
echo trim($string);
# Output => Hello World!
