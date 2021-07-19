<?php

/**
 * Definition and Usage:
 *   The bin2hex() function in PHP converts a string
 * to hexadecimal values

 *
 *    The hex2bin() function is used to decode a
 * hexadecimally encoded binary string.
 *
 *
 * Syntax:
 *    bin2hex($string)
 *    hex2bin($string)
 *
 */

// Example 1:
$str = 'Binary to Hexadicimal Value';

$hex = bin2hex($str);
$bin = hex2bin($hex);

echo $hex;
echo "<br/>";
echo $bin;

# Output (encode) => 42696e61727920746f2048657861646963696d616c2056616c7565
# Output (decode) => Binary to Hexadicimal Value