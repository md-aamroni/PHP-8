<?php

namespace App\SingleResponsibility;

/**
 *
 *
 *
 */
class Payroll
{
	private float $basic;

	public function __construct($basic)
	{
		$this->basic = $basic;
	}

	public function salarySheet(): array
	{
		return array(
			'basic_salary' => $this->basic,
			'travel_allow' => $this->basic * 0.15,
			'dining_allow' => $this->basic * 0.25,
			'medical_serv' => $this->basic * 0.20,
			'total_salary' => $this->basic + ($this->basic * 0.15) + ($this->basic * 0.25) + ($this->basic * 0.20)
		);
	}
}
