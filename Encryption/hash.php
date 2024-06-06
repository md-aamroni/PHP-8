<?php

/**
 * Definition and Usage:
 *    This MD5 hash generator is useful for encoding passwords
 *    This SHA-1 tool hashes a string into a message digested SHA-1 hash
 *
 *
 * Syntax:
 *    md5($string)
 *    sha1($string)
 *
 */

// Example 1:
$password = 'abc12345';

echo md5($password); // 128-bit
echo "<br/>";
echo sha1($password); // 160-bit

# Output (md5)  => d6b0ab7f1c8ab8f514db9a6d85de160a
# Output (sha1) => 701b389b848a2b1cfab867093101d8d5ac56addd