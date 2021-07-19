<?php

require_once 'Activities.php';

class ExtendActivities extends Activities
{
	public string $firstName = "John";
	public string $lastName	 = "Doe";

	protected string $email  = "johndoe@gmail.com";
	protected string $mobile = "+880 1316-440504";

	private string $bankAccount = "Eastern Bank Limited";
	private string $accountNo	 = "7845 **** ****";

	public function parentClassName(): string
	{
		return 'Parent class is: ' . get_parent_class($this) . PHP_EOL;
	}

	public function classVariables(): array
	{
		return get_class_vars(__CLASS__);
	}

	public function objectVariables(): array
	{
		return get_object_vars($this);
	}

	public function getDeclaredClass(): array
	{
		return get_declared_classes();
	}
}

$extend = new ExtendActivities();

 echo $extend->parentClassName();
 print_r($extend->classVariables());
 print_r($extend->objectVariables());
 echo ExtendActivities::getCalledClass();
 print_r($extend->getDeclaredClass());
