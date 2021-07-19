<?php

/**
 * Definition and Usage:
 *    The array_chunk() function splits an array
 * into chunks of new arrays.
 *
 *
 * Syntax:
 *    array_chunk(array, size, preserve_key)
 *
 *    array          -  Required. Specifies the array to use
 *    size           -  Required. An integer that specifies the size of each chunk
 *    preserve_key   -  Optional. Possible values:
 *                         1. true - Preserves the keys
 *                         2. false - Default. Reindexes the chunk numerically
 *
 */

// Example 1:
$users = array("Peter" => "35", "Ben" => "37", "Joe" => "43", "Harry" => "50");

echo '<pre>';
print_r(array_chunk($users, 3, true));
print_r(array_chunk($users, 2, false));
echo '</pre>';

/**
 * The output of the code above will be:
 * Array 
 * (
 *    [0] => Array 
 *       (
 *          [Peter] => 35 
 *          [Ben] => 37
 *       ) 
 *    [1] => Array 
 *       (
 *          [Joe] => 43 
 *          [Harry] => 50
 *       )
 * )
 * 
 * Array 
 * (
 *    [0] => Array 
 *       (
 *          [0] => 35 
 *          [1] => 37
 *       ) 
 *    [1] => Array 
 *       (
 *          [0] => 43 
 *          [1] => 50
 *       )
 * )
 */