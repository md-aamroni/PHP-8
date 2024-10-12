<?php


namespace App\MagicConstant;


class ConstantNameSpace
{
	public function getNameSpace(): string
	{
		return 'The namespace is => ' . __NAMESPACE__ . PHP_EOL;
	}
}

$const = new ConstantNameSpace();
echo $const->getNameSpace();
