<?php


class AccountController
{
	protected string $bankName;
	protected string $branchAddress;
	protected string $accountNumber;
	protected string $accountHolder;
	protected string $txnCurrency;

	protected function bankAccount($bank, $branch, $accountNo, $accountHolder, $currency): array {
		$this->bankName 		= $bank;
		$this->branchAddress = $branch;
		$this->accountNumber = $accountNo;
		$this->accountHolder = $accountHolder;
		$this->txnCurrency	= $currency;

		return [
			'bank_name'			=> $this->bankName,
			'branch_address'	=> $this->branchAddress,
			'account_number'	=> $this->accountNumber,
			'account_holder'	=> $this->accountHolder,
			'txn_currency'		=> $this->txnCurrency,
		];
	}
}
