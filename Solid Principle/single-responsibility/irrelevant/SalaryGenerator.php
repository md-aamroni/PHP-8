<?php

namespace App\SingleResponsibility;

/**
 * Bad Design Pattern
 *
 * Here the SalaryGenerator class is used to set required info and
 * return the multiple statement as well as different type of
 * information such as employee and salary.
 *
 * Supposed, we just want to print the statement of employee
 * only or salary sheet only, so how to do this? Do we remove
 * the declared methods or something else?
 *
 * @param int
 * @return array
 */
class SalaryGenerator
{
	protected string $fullName;
	protected string $designation;
	protected string $organization;
	protected float $basicSalary;

	public function __construct($name, $des, $org, $basic)
	{
		$this->fullName	  = $name;
		$this->designation  = $des;
		$this->organization = $org;
		$this->basicSalary  = $basic;
	}

	protected function employeeInfo(): array
	{
		return array(
			'full_name'		=> $this->fullName,
			'designation'	=> $this->designation,
			'organization'	=> $this->organization
		);
	}

	public function salarySheet(): array
	{
		return array(
			'employee'	=> $this->employeeInfo(),
			'payroll'	=> array(
				'basic_salary' => $this->basicSalary,
				'travel_allow' => $this->basicSalary * 0.15,
				'dining_allow' => $this->basicSalary * 0.25,
				'medical_serv' => $this->basicSalary * 0.20,
				'total_salary' => $this->basicSalary + ($this->basicSalary * 0.15) + ($this->basicSalary * 0.25) + ($this->basicSalary * 0.20)
			)
		);
	}
}
