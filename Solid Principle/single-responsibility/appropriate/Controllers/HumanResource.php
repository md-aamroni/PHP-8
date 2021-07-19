<?php

namespace App\SingleResponsibility;

class HumanResource
{
	protected array $statements;
	protected array $result;

	public function __construct(...$object)
	{
		$this->statements = $object;
	}

	public function statement(): array
	{
		foreach ($this->statements as $statement) {
			if ($statement instanceof \App\SingleResponsibility\Employee) {
				$this->result['employee'] = $statement->employeeInfo();
			} elseif ($statement instanceof \App\SingleResponsibility\Payroll) {
				$this->result['payroll'] = $statement->salarySheet();
			}
		}
		return $this->result;
	}
}
