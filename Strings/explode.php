<?php

/**
 * Definition and Usage:
 *    The explode() function breaks a string into an array.
 *
 *
 * Syntax:
 *    explode(separator, string, limit)
 *
 *
 * Parameter Values:
 *    separator => Required. Specifies where to break the string
 *    length    => Required. The string to split
 *    limit     => Optional. Specifies the number of array elements to return
 *
 */

// Example 1:
$string = "Apple, Banana, Mango, Strawberry";
$explod = explode(', ', $string, str_word_count($string) - 1);
$explod = explode(', ', $string);

print_r($explod);
# Output => Array([0] => Apple [1] => Banana [2] => Mango [3] => Strawberry)