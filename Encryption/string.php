<?php

/**
 * Definition and Usage:
 *    The convert_uuencode() function encodes a string
 * using the uuencode algorithm.
 *

 *    This function decode a uuencoded string encoded
 * using convert_uuencode() function.
 *
 *
 * Syntax:
 *    convert_uuencode($string)
 *    convert_uudecode($string)
 *
 */

// Example 1:
$string = 'life is all about next steps';

$encode = convert_uuencode($string);
$decode = convert_uudecode($encode);


echo $encode;
echo "<br/><br/>";
echo $decode;

# Output (encode) => <;&EF92!I<R!A;&P@86)O=70@;F5X="!S=&5P<P``
# Output (decode) => life is all about next steps
