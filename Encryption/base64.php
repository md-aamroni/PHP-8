<?php

/**
 * Definition and Usage:
 *   The base64_encode() function is an inbuilt function in PHP which
 * is used to Encodes data with MIME base64. MIME (Multipurpose Internet
 * Mail Extensions) base64 is used to encode the string in base64. The
 * base64_encoded data takes 33% more space then original data.
 *
 *
 *    The base64_decode() is an inbuilt function in PHP which is used to
 * Decodes data which is encoded in MIME base64.
 *
 *
 * Syntax:
 *    base64_encode($data)
 *    base64_decode($data)
 *
 */

// Example 1:
$string = 'This string is encoded using base64 encode function';

$encode = base64_encode($string);
$decode = base64_decode($encode);

echo $encode . '<br/>';
echo $decode . '<br/>';

# Output (encode) => VGhpcyBzdHJpbmcgaXMgZW5jb2RlZCB1c2luZyBiYXNlNDYgZW5jb2RlIGZ1bmN0aW9u
# Output (decode) => This string is encoded using base46 encode function
