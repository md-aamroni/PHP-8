<?php

require_once 'Conditional/SimpleClass.php';
require_once 'Conditional/SimpleInterface.php';
require_once 'Conditional/SimpleTrait.php';
require_once 'Conditional/ExtendedClass.php';


// Object Instantiate for Further Usage
$simple = new Activities();
$extend = new ExtendedClass();


// Example of class_exists():
if (class_exists('Activities')) {
	echo 'class is exist' . PHP_EOL;
} else {
	echo 'Oops! class is not exist' . PHP_EOL;
}


// Example of interface_exists():
if (interface_exists('SimpleInterface')) {
	echo 'interface is exist' . PHP_EOL;
} else {
	echo 'Oops! interface is not exist' . PHP_EOL;
}


// Example of method_exists():
if (method_exists($simple, 'index')) {
	echo 'method is exist' . PHP_EOL;
} else {
	echo 'Oops! method is not exist' . PHP_EOL;
}


// Example of trait_exists():
if (trait_exists('SimpleTrait')) {
	echo 'trait is exist' . PHP_EOL;
} else {
	echo 'Oops! trait is not exist' . PHP_EOL;
}


// Example of property_exists():
if (property_exists('SimpleTrait', 'firstName')) {
	echo 'property is exist' . PHP_EOL;
} else {
	echo 'Oops! property is not exist' . PHP_EOL;
}


// Example of is_a():
if (is_a($simple, 'Activities')) {
	echo '$simple is instantiate based on Activities' . PHP_EOL;
} else {
	echo 'Oops! $simple is not instantiate based on Activities' . PHP_EOL;
}


// Example of is_subclass_of():
if (is_subclass_of($extend, 'Activities')) {
	echo '$extend is instantiate based on ExtendedClass which extended from Activities' . PHP_EOL;
} else {
	echo 'Oops! $extend is not instantiate based on ExtendedClass which extended from Activities' . PHP_EOL;
}

