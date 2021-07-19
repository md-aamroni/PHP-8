<?php


class BankAccount
{
	public static string $bankName;
	public static string $accountHolder;
	public static string $accountNo;
	public static string $expireDate;

	public function bankDetails($bank, $acHolder, $acNo, $expire): array
	{
		self::$bankName		= $bank;
		self::$accountHolder = $acHolder;
		self::$accountNo 		= $acNo;
		self::$expireDate 	= $expire;

		return array(
			'bank_name' 		=> self::$bankName,
			'account_holder'	=> self::$accountHolder,
			'account_no'		=> self::$accountNo,
			'expire_date'		=> self::$expireDate
		);
	}
}

$bank = new BankAccount();
print_r($bank->bankDetails('Eastern Bank Limited', 'Mr. John Doe', '5454 752 986', '2024-07-15'));
