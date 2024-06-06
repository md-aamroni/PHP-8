<?php

/**
 * Definition and Usage:
 *    The stripslashes() function removes backslashes 
 * added by the addslashes() function.
 *
 *
 * Syntax:
 *    stripslashes(string)
 *
 *
 * Parameter Values:
 *    string => Required. Specifies the string to check
 *
 */

// Example 1:
$string = stripslashes("Hey what\'s up!");
echo ($string);
# Output => Hey what's up!



/**
 * Definition and Usage:
 *    The stripcslashes() function removes backslashes 
 * added by the addcslashes() function.
 *
 *
 * Syntax:
 *    stripcslashes(string)
 *
 */

// Example 1:
$string = stripcslashes("Hey \what's up!");
echo ($string);
# Output => Hey what's up!