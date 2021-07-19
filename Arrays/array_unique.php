<?php

/**
 * Definition and Usage:
 *    The array_unique() function removes duplicate
 * values from an array. If two or more array values
 * are the same, the first appearance will be kept
 * and the other will be removed.
 *
 *
 * Syntax:
 *    array_unique(array, sorttype)
 *
 *    array    - Required. Specifies an array
 *    sorttype - Optional. Specifies how to compare the array elements/items. Possible values:
 *
 *                1. SORT_STRING - Default. Compare items as strings
 *                2. SORT_REGULAR - Compare items normally (don't change types)
 *                3. SORT_NUMERIC - Compare items numerically
 *                4. SORT_LOCALE_STRING - Compare items as strings, based on current locale
 *
 */

// Example 1:
$colors = array("a" => "red", "b" => "green", "c" => "red", "d" => "blue", "f" => "blue");
$result = array_unique($colors);

echo '<pre>';
print_r($result);
echo '</pre>';

/**
 * The output of the code above will be:
 * Array
 * (
 *    [a] => red
 *    [b] => green
 *    [c] => blue
 * )
 *
 */