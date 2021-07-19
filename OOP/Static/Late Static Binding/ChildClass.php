<?php

require_once 'ParentClass.php';

class ChildClass extends ParentClass
{
	public static string $userName = "Kabir Khan";
}

echo ChildClass::setUserName() . PHP_EOL;
echo ChildClass::getUserName() . PHP_EOL;

