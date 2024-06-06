<?php

/**
 * Definition and Usage:
 *    The asort() function sorts an associative array 
 * in ascending order, according to the value.
 *
 *
 * Syntax:
 *    asort(array, sorttype)
 *
 *    array    - Required. Specifies the array to sort
 *    sorttype - Optional. Specifies how to compare the array elements/items. Possible values:
 *
 *                1) 0 = SORT_REGULAR - Default. Compare items normally (don't change types)
 *                2) 1 = SORT_NUMERIC - Compare items numerically
 *                3) 2 = SORT_STRING - Compare items as strings
 *                4) 3 = SORT_LOCALE_STRING - Compare items as strings, based on current locale
 *                5) 4 = SORT_NATURAL - Compare items as strings using natural ordering
 *                6) 5 = SORT_FLAG_CASE
 *
 */

// Example 1:
$users = array(
   "Kat" => "35", 
   "Ben" => "37", 
   "Joe" => "43"
);
asort($users);

echo '<pre>';
print_r($users);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [Kat] => 35
 *    [Ben] => 37
 *    [Joe] => 43
 * )
 *
 */