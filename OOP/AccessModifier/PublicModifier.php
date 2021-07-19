<?php

class PublicModifier
{
	public string $firstName;
	public string $lastName;

	public function __construct($fName, $lName)
	{
		$this->firstName	= $fName;
		$this->lastName	= $lName;
	}

	public function getUserName()
	{
		echo $this->firstName .' '. $this->lastName . PHP_EOL;
	}
}

$user = new PublicModifier('Md. Kabir', 'Khan');
$user->getUserName();
