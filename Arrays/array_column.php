<?php

/**
 * Definition and Usage:
 *    The array_column() function returns the values from
 * a single column in the input array.
 *
 *
 * Syntax:
 *    array_column(array, column_key, index_key)
 *
 *    array       -  Required. Specifies the multi-dimensional array (record-set)
 *                   to use. As of PHP 7.0, this can also be an array of objects.
 *    column_key  -  Required. An integer key or a string key name of the column
 *                   of values to return. This parameter can also be NULL to return
 *                   complete arrays (useful together with index_key to re-index the array).
 *    index_key   -  Optional. The column to use as the index/keys for the returned array.
 *
 */

// Example 1:
$users = array(
   array(
      'id'         => 5698,
      'first_name' => 'Peter',
      'last_name'  => 'Burgman',
   ),
   array(
      'id'         => 4767,
      'first_name' => 'Ben',
      'last_name'  => 'Smith',
   ),
   array(
      'id'         => 3809,
      'first_name' => 'John',
      'last_name'  => 'Doe',
   )
);

$lastNames = array_column($users, 'last_name');

echo '<pre>';
print_r($lastNames);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array 
 * (
 *    [0] => Burgman 
 *    [1] => Smith 
 *    [2] => Doe
 * )
 */