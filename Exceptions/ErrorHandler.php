<?php

// TODO: Custom Exception Defined
class ErrorHandler extends Exception
{
	public function getError()
	{
		return $this->getMessage() . ' at line no ' . $this->getLine();
	}

	public function errorDetails()
	{
		return [
			'error' => $this->getMessage(),
			'file'  => $this->getFile(),
			'line'  => $this->getLine(),
			'code'  => $this->getCode()
		];
	}
}
