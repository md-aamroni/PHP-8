<?php

class ProtectedModifier
{
	protected string $firstName;
	protected string $lastName;

	public function __construct($fName, $lName)
	{
		$this->firstName	= $fName;
		$this->lastName	= $lName;
	}

	protected function getUserName()
	{
		echo $this->firstName .' '. $this->lastName . PHP_EOL;
	}
}


class ChildProtectedModifier extends ProtectedModifier
{
	public function getUserName()
	{
		echo $this->firstName .' '. $this->lastName . PHP_EOL;
	}
}

$user = new ChildProtectedModifier('Md. Kabir', 'Khan');
$user->getUserName();

