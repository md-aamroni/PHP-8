<?php

// TODO: Exception Handling Using Finally Block
$basicSalary = 7500;
$increment	 = false;
$totalSalary = [];

try {
	if ($basicSalary > 0 && $increment === true) {
		$totalSalary = [
			'basic_salary'			=> $basicSalary,
			'provident_fund'		=> $basicSalary * 0.10,
			'travel_allowance'	=> $basicSalary * 0.08,
			'dinning_allowance'	=> $basicSalary * 0.15,
			'yearly_increment'	=> $basicSalary * 0.05,
			'total_salary'			=> $basicSalary + ($basicSalary * 0.10) + ($basicSalary * 0.08) + ($basicSalary * 0.15) + ($basicSalary * 0.05)
		];
	} elseif ($basicSalary > 0 && $increment === false) {
		$totalSalary = [
			'basic_salary'			=> $basicSalary,
			'provident_fund'		=> $basicSalary * 0.10,
			'travel_allowance'	=> $basicSalary * 0.08,
			'dinning_allowance'	=> $basicSalary * 0.15,
			'yearly_increment'	=> 0,
			'total_salary'			=> $basicSalary + ($basicSalary * 0.10) + ($basicSalary * 0.08) + ($basicSalary * 0.15)
		];
	} else {
		throw new Exception('Oops! Employees basic salary must not be nil');
	}
} catch (Exception $e) {
	print_r($e->getMessage());
} finally {
	if (!is_null($basicSalary) && $basicSalary > 0) {
		print_r($totalSalary);
	}
}
