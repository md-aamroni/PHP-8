<?php


class ProfileController
{
	protected string $fullName;
	protected int $age;
	protected string $profession;

	public function information($name, $age, $profession): array {
		$this->fullName   = $name;
		$this->age        = $age;
		$this->profession = $profession;

		return [get_class($this) => [
			'full_name' => $this->fullName, 'age' => $this->age, 'profession' => $this->profession]
		];
	}
}
