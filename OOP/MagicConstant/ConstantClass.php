<?php


class ConstantClass
{
	public function getClassName(): string
	{
		return 'The class name is => ' . __CLASS__ . PHP_EOL;
	}

	public function getMethodName(): string
	{
		return 'The method name is => ' . __METHOD__ . PHP_EOL;
	}
}

$const = new ConstantClass();

echo $const->getClassName();
echo $const->getMethodName();
