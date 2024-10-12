<?php

require_once 'Get/Activities.php';
require_once 'Get/ExtendActivities.php';
require_once 'Get/ActivitiesInterface.php';
require_once 'Get/ActivitiesTrait.php';


// Object Instantiate for Further Usage
$object = new Activities();
$extend = new ExtendActivities();


// Example of get_class():
echo 'Class name is: ' . get_class($object) . PHP_EOL;


// Example of get_parent_class();
echo 'Parent class name is: ' . get_parent_class($extend) . PHP_EOL;


// Example of get_class_methods():
print_r(get_class_methods($object));


// Example of get_class_vars():
print_r(get_class_vars(get_class($extend)));


// Example of get_object_vars():
print_r(get_object_vars($extend));


// Example of get_called_class():
echo Activities::getCalledClass();
echo ExtendActivities::getCalledClass();


// Example of get_declared_classes():
print_r(get_declared_classes());


// Example of get_declared_classes():
print_r(get_declared_interfaces());


// Example of get_declared_classes():
print_r(get_declared_traits());


// Example of class_alias():
class_alias('ExtendActivities', 'ExAct');
$exAct = new ExAct();
echo $exAct->firstName . ' ' . $exAct->lastName . PHP_EOL;
