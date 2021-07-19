<?php


trait ConstantTrait
{
	public function getTrait(): string
	{
		return 'The trait is => ' . __TRAIT__ . PHP_EOL;
	}
}

class ParseTrait
{
	use ConstantTrait;
}

$const = new ParseTrait();
echo $const->getTrait();
