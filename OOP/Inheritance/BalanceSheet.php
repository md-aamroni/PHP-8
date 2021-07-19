<?php

require_once 'Controllers/SalarySheetController.php';

class BalanceSheet extends SalarySheetController
{
	public function userAccountDetails($bank, $branch, $accountNo, $accountHolder, $currency, $totalSalary): array
	{
		$this->totalSalary = $totalSalary;

		return [
			'accountDetails'	=> $this->bankAccount($bank, $branch, $accountNo, $accountHolder, $currency),
			'salaryDetails'	=> [
				'basic_salary'		 => $this->basicSalary() . ' ' . $this->txnCurrency,
				'provident_fund'	 => $this->providentFund() . ' ' . $this->txnCurrency,
				'salary_increment' => $this->salaryIncrement() . ' ' . $this->txnCurrency,
				'total_salary'		 => $this->totalSalary . ' ' . $this->txnCurrency
			]
		];
	}
}

$rahim = new BalanceSheet();
$karim = new BalanceSheet();

$rahimAccounts = $rahim->userAccountDetails('Eastern Bank Limited', 'Dhaka-1206', '4512-8754-6531', 'Abdur Rahim', 'BDT', 22150);
$karimAccounts = $karim->userAccountDetails('Dutch Bangla Bank Limited', 'Dhaka-1206', '7851-2474-5421', 'Karim Hossain', 'BDT', 27000);

print_r($rahimAccounts);
