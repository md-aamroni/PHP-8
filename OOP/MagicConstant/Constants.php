<?php


class Constants
{
	public function getLineNo(): string
	{
		return 'The line no is => ' . __LINE__ . PHP_EOL;
	}

	public function getFilePath(): string
	{
		return 'The file path is => ' . __FILE__ . PHP_EOL;
	}

	public function getDirectory(): string
	{
		return 'The directory is => ' . __DIR__ . PHP_EOL;
	}

	public function getFunction(): string
	{
		return 'The function is => ' . __FUNCTION__ . PHP_EOL;
	}
}


$const = new Constants();

echo $const->getLineNo();
echo $const->getFilePath();
echo $const->getDirectory();
echo $const->getFunction();
