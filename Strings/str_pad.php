<?php

/**
 * Definition and Usage:
 *    The str_pad() function pads a string to a new length.
 *
 *
 * Syntax:
 *    str_pad(string, length, pad_string, pad_type)
 *
 *
 * Parameter Values:
 *    string     => Required. Specifies the string to pad
 *    length     => Required. Specifies the new string length. If this
 *                  value is less than the original length of the string,
 *                  nothing will be done
 *    pad_string => Optional. Specifies the string to use for padding.
 *                  Default is whitespace
 *    pad_type   => Optional. Specifies what side to pad the string.
 *
 *                  Possible values:
 *                  1. STR_PAD_BOTH - Pad to both sides of the string.
 *                  2. STR_PAD_LEFT - Pad to the left side of the string
 *                  3. STR_PAD_RIGHT - Pad to the right side of the string. This is default
 *
 */

// Example 1:
$string = 'Hello World';
echo str_pad($string, 13, '_', STR_PAD_LEFT) . "<br/>";
echo str_pad($string, 13, '_', STR_PAD_RIGHT) . "<br/>";
echo str_pad($string, 15, '_', STR_PAD_BOTH) . "<br/>";
# Output => __Hello World  |  Hello World__  | __Hello World__
