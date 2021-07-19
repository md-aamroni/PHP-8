<?php

/**
 * Definition and Usage:
 *    The chunk_split() function splits a string
 * into a series of smaller parts.
 *
 *
 * Syntax:
 *    chunk_split(string, length, end)
 *
 *
 * Parameter Values:
 *    string => Specifies the string to split
 *    length => Optional. A number that defines the length of the chunks. Default is 76
 *    end    => Optional. A string that defines what to place at the end of each chunk. Default is \r\n
 *
 */

// Example 1:
$string = "Hey what's up!";

echo chunk_split($string, 1, '.');
# Output => H.e.y. .w.h.a.t.'.s. .u.p.!.