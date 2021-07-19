<?php

/**
 * Definition and Usage:
 *    The addslashes() function returns a string with
 * backslashes in front of predefined characters.
 *
 *
 * Syntax:
 *    addslashes(string)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to be escaped
 *
 *
 * Predefined characters are:
 *    single quote (')
 *    double quote (")
 *    backslash (\)
 *    NULL
 *
 */

// Example 1:
$string = addslashes("Hey what's up!");
echo ($string . "<br/>");
# Output => Hey what\'s up!




/**
 * Definition and Usage:
 *    The addcslashes() function returns a string with
 * backslashes in front of the specified characters.
 *
 *
 * Syntax:
 *    addcslashes(string, characters)
 *
 *
 * Parameter Values:
 *    string     => Required. Specifies the string to be escaped
 *    characters => Required. Specifies the characters or range of characters to be escaped
 *
 */

// Example 1:
$string = addcslashes("Hey what's up!", "w");
echo ($string . "<br/>");
# Output => Hey \what's up!