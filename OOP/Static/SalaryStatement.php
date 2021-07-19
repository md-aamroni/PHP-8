<?php


class SalaryStatement
{
	public string $bankName;
	public string $accountNo;
	public string $basicSalary;
	public string $transportAllowance;
	public string $dinningAllowance;
	public string $providentFund;
	public string $totalSalary;

	private function generateSheet($bank, $accountNo, $basic): array
	{
		$this->bankName				= $bank;
		$this->accountNo 				= $accountNo;
		$this->basicSalary			= $basic;
		$this->transportAllowance 	= (float) $this->basicSalary * 0.12;
		$this->dinningAllowance		= (float) $this->basicSalary * 0.18;
		$this->providentFund			= (float) $this->basicSalary * 0.10;
		$this->totalSalary			= (float) $this->basicSalary + $this->transportAllowance + $this->dinningAllowance + $this->providentFund;

		return array(
			'bank_name'				 => $this->bankName,
			'account_no'			 => $this->accountNo,
			'basic_salary'			 => $this->basicSalary . ' tk',
			'transport_allowance' => $this->transportAllowance . ' tk',
			'dining_allowance'	 => $this->dinningAllowance . ' tk',
			'provident_fund'		 => $this->providentFund . ' tk',
			'total_salary'			 => $this->totalSalary . ' tk',
		);
	}

	public static function salarySheet($bank, $accountNo, $basic): array
	{
		return (new self)->generateSheet($bank, $accountNo, $basic);
	}
}

print_r(SalaryStatement::salarySheet('Bank Asia Limited', '8745 5412 5451', 6500));
