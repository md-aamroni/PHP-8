<?php

/**
 * Definition and Usage:
 *    The sprintf() function writes a formatted string to a variable.
 *
 *
 * Syntax:
 *    sprintf(format, arg1, arg2, arg++)
 *
 *
 * Parameter Values:
 *    format => Required. Specifies the string and how to format the variables in it.
 *
 *              Possible format values:
 *                %% - Returns a percent sign
 *                %b - Binary number
 *                %c - The character according to the ASCII value
 *                %d - Signed decimal number (negative, zero or positive)
 *                %e - Scientific notation using a lowercase (e.g. 1.2e+2)
 *                %E - Scientific notation using a uppercase (e.g. 1.2E+2)
 *                %u - Unsigned decimal number (equal to or greather than zero)
 *                %f - Floating-point number (local settings aware)
 *                %F - Floating-point number (not local settings aware)
 *                %g - shorter of %e and %f
 *                %G - shorter of %E and %f
 *                %o - Octal number
 *                %s - String
 *                %x - Hexadecimal number (lowercase letters)
 *                %X - Hexadecimal number (uppercase letters)
 *
 *    arg1   => Required. The argument to be inserted at the
 *              first %-sign in the format string
 *    arg2   => Optional. The argument to be inserted at the
 *              second %-sign in the format string
 *    arg++  => Optional. The argument to be inserted at the third,
 *              fourth, etc. %-sign in the format string
 *
 */

// Example 1:
$total  = 7.5;
$state  = 'Dhaka';
$string = sprintf("There are %.1f million bicycles in %s.", $total, $state);

echo $string;

# Output => There are 7 million bicycles in Dhaka.