<?php

/**
 * Definition and Usage:
 *    A string is a sequence of characters, like "Hello world!".
 *
 * 1. The strlen() function returns the length of a string.
 * 2. The str_word_count() function counts the number of words in a string.
 * 3. The strpos() function searches for a specific text within a string.
 *
 */

// Example 1:

$userName = 'Md. Kabir Khan';

echo strlen($userName);
echo '<br/>';
echo str_word_count($userName);
echo '<br/>';
echo strpos($userName, 'Khan');