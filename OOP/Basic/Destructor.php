<?php

class Destructor
{
	public string $person;

	public function __construct($name)
	{
		$this->person = $name;
	}

	public function __destruct()
	{
		echo $this->person . " who has been subscribed our newsletter. Thanks for be with us..." . PHP_EOL;
	}
}

$rahim = new Destructor('Md. Abdur Rahim');
