<?php

require_once 'AccountController.php';

class SalarySheetController extends AccountController
{
	protected float $totalSalary;
	protected float $basicSalary;
	protected float $providentFund;
	protected float $salaryIncrement;

	protected function basicSalary(): float
	{
		$this->basicSalary = $this->totalSalary * 0.45;
		return $this->basicSalary;
	}

	protected function providentFund(): float
	{
		$this->providentFund = $this->totalSalary * 0.15;
		return $this->providentFund;
	}

	protected function salaryIncrement(): float
	{
		$this->salaryIncrement = $this->totalSalary * 0.2;
		return $this->salaryIncrement;
	}
}
