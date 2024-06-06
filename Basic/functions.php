<?php

/**
 * Definition and Usage:
 *    PHP has more than 1000 built-in functions, and
 * in addition you can create your own custom functions.
 *
 *
 * Syntax:
 *    function functionName() {
 *       code to be executed;
 *    }
 *
 *    or
 *
 *    function functionName($param1, $param2) {
 *       code to be executed;
 *    }
 *
 */

// Example 1:
function userInfomation()
{
   echo 'Hello John Doe, How are you?';
}

userInfomation();

echo '<br/>';


// Example 2:
function users($firstName, $lastName)
{
   echo $firstName .' '. $lastName;
}
users('John', 'Doe');