<?php

class PrivateModifier
{
	private string $firstName;
	private string $lastName;

	public function __construct($fName, $lName)
	{
		$this->firstName	= $fName;
		$this->lastName	= $lName;

		echo $this->getUserName();
	}

	private function getUserName(): string
	{
		return $this->firstName .' '. $this->lastName . PHP_EOL;
	}
}

$user = new PrivateModifier('Md. Kabir', 'Khan');
