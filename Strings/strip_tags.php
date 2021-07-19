<?php

/**
 * Definition and Usage:
 *    The strip_tags() function strips a string
 * from HTML, XML, and PHP tags.
 *
 *
 * Syntax:
 *    strip_tags(string, allow)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to check
 *    allow  => Optional. Specifies allowable tags. These
 *              tags will not be removed
 *
 */

// Example 1:
$string = '<div>Hello <b>world!</b></div>';
echo strip_tags($string);
echo "<br/>";
echo strip_tags($string, '<b>');
# Output => Hello world!   |  Hello <b>world!</b>
