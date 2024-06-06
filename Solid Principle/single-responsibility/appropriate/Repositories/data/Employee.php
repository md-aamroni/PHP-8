<?php

namespace App\SingleResponsibility;

/**
 *
 *
 *
 */
class Employee
{
	private string $fullName;
	private string $designation;
	private string $organization;

	public function __construct($name, $des, $org)
	{
		$this->fullName	  = $name;
		$this->designation  = $des;
		$this->organization = $org;
	}

	public function employeeInfo(): array
	{
		return array(
			'full_name'		=> $this->fullName,
			'designation'	=> $this->designation,
			'organization'	=> $this->organization
		);
	}
}
