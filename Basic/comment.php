<?php
	
/**
 * Plugin: Something Test
 * Author: John Doe
 * Detail: Lorem ipsum dollar sit amet
 */
 
class TestClass {
	// TODO: Your Code Here..
}

$rc = new ReflectionClass('TestClass');
echo $rc->getDocComment() . PHP_EOL;