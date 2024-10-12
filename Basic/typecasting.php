#−

<?php

/**
 * 
 *  Implicit Type Casting
 *  Here is an example of coercive or implicit type casting 
 * 
 */
   $a = 10;
   $b = '20';
   $c = $a+$b;
   echo "c = " . $c;


   /**
 * 
 *  Casting to Integer
 *  Here is an example of coercive or Integer type casting 
 * 
 */

   $a = 9.99;
   $b = (int)$a;
   var_dump($b);

?>
