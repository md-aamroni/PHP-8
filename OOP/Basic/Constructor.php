<?php

class Constructor
{
	public string $person;
	public string $profession;

	public function __construct($name, $profession)
	{
		$this->person = $name;
		$this->profession = $profession;

		echo $this->person . " who designated as a " . $this->profession . PHP_EOL;
	}
}

$rahim = new Constructor('Md. Abdur Rahim', 'Graphics Designer');
$karim = new Constructor('Md. Karim Ullah', 'Android Developer');
