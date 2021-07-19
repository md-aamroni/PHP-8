<?php


class Activities
{
	public function className(): string
	{
		return 'Class name is: ' . get_class($this) . PHP_EOL;
	}

	public function set(): void
	{
		// TODO: Execute Your Code Here...
	}

	public function get(): void
	{
		// TODO: Execute Your Code Here...
	}

	public function classMethods(): array
	{
		return get_class_methods($this);
	}

	protected function details(): void
	{
		// TODO: Execute Your Code Here...
	}

	private function credential(): void
	{
		// TODO: Execute Your Code Here...
	}

	public static function getCalledClass(): string
	{
		return get_called_class() . PHP_EOL;
	}
}

$object = new Activities();

// echo $object->className();
// print_r($object->classMethods());
// echo Activities::getCalledClass();

