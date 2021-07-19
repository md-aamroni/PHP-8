<?php

require_once 'ErrorHandler.php';

// TODO: General Exception Handling
$percent = 3.6;
$netCash = 12540;

try {
	if ($percent <= 0) {
		throw new Exception('Oops! Interest percentage should be more than 0' . PHP_EOL);
	} else {
		print_r(['netCash' => $netCash, 'percent' => $percent . '%', 'balance' => $netCash + ($netCash * ($percent / 100))]);
	}
} catch (Exception $e) {
	print_r($e->getMessage());
}




// TODO: Exception Handling Using Functional Block
function interestCalculate($balance, $interest)
{
	try {
		if ($balance <= 0) {
			throw new Exception('Oops! Not enough balance to your account' . PHP_EOL);
		} elseif ($interest <= 0) {
			throw new Exception('Oops! Interest rate should be more 0' . PHP_EOL);
		} else {
			print_r(['balance' => $balance, 'percent' => $interest . '%', 'totalPay' => $balance + ($balance * ($interest / 100))]);
		}
	} catch (Exception $e) {
		print_r($e->getMessage());
	}
}

interestCalculate(742, 4);




// TODO: Custom Exception Handling
$userName = 'Kabir Khan';
$password = 'abc123';

try {
	if (empty($userName) && empty($password)) {
		throw new ErrorHandler('Oops! user name and password is required');
	} elseif (strlen($password) <= 0) {
		throw new ErrorHandler('Oops! password length should be more that 0');
	} else {
		print_r(['user_name' => $userName, 'password' => $password]);
	}
} catch (ErrorHandler $e) {
	print_r($e->getError()  . PHP_EOL);
}




// TODO: Custom Exception Handling Using Functional Block
function userDetails($args)
{
	try {
		if (empty($args) && !is_array($args)) {
			throw new ErrorHandler('User information should be passed by an array');
		} elseif (is_array($args) && (count($args) === 1)) {
			throw new ErrorHandler('User information must be more descriptive');
		} else {
			print_r($args);
		}
	} catch (ErrorHandler $e) {
		print_r($e->errorDetails());
	}
}

userDetails('');
