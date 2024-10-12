<?php

/**
 * Content 	: Invoke
 * Date 		:
 * Features	:
 *
 */
class Calculation {
	protected $a;
	protected $b;
	protected $result;

	public function __construct($type, $num1, $num2) {
		$this->a = $num1;
		$this->b = $num2;

		try {
			if (!empty($type) && $type == 'addition') {
				$data = $this->addition();
			} elseif (!empty($type) && $type == 'subtraction') {
				$data = $this->subtraction();
			} elseif (!empty($type) && $type == 'multiplication') {
				$data = $this->multiplication();
			} elseif (!empty($type) && $type == 'division') {
				$data = $this->division();
			} elseif (!empty($type) && $type == 'remainder') {
				$data = $this->remainder();
			}  else {
				throw new Exception('Calculation type is required');
			}
		} catch (Exception $e) {
			$data = $e->getMessage();
		}

		return $data;
	}

	protected function addition(): string
	{
		$this->result = $this->a + $this->b;
		return 'Total addition value is = ' . $this->result;
	}

	protected function subtraction(): void {
		$this->result = $this->a - $this->b;
		echo 'Total subtraction value is = ' . $this->result;
	}

	protected function multiplication() {
		$this->result = $this->a * $this->b;
		echo 'Total multiplication value is = ' . $this->result;
	}

	protected function division() {
		$this->result = $this->a / $this->b;
		echo 'Total division value is = ' . $this->result;
	}

	protected function remainder() {
		$this->result = $this->a % $this->b;
		echo 'Total division value is = ' . $this->result;
	}

	public function __invoke() {
		return $this->result;
	}
}


$calculate = new Calculation('remainder', 25, 7);
$calculate();
