<?php

/**
 * Content		: __unset()
 * Description	:
 * 	__unset() is invoked when unset() is used on inaccessible
 * 	(protected or private) or non-existing properties.
 *
 */

declare(strict_types = 1);

class UnsetMethod
{
	public string $userName;
	public string $unsetProperty;
	private string $bankAccount;
	private string $accountHolder;
	protected array $detailsInfo;

	public function setPerson($name): string
	{
		$this->bankAccount	= md5($name);
		$this->accountHolder	= $name;

		$parseUserName	= explode(' ', $name);
		if (!empty($parseUserName) && is_array($parseUserName)) {
			$this->userName = next($parseUserName);
		}

		return $this->userName;
	}


	public function details(): array
	{
		try {
			if (isset($this->bankAccount) && isset($this->accountHolder) ) {
				$this->detailsInfo = [
					'user_name'			=> $this->userName,
					'bank_account'		=> $this->bankAccount,
					'account_holder'	=> $this->accountHolder
					];
			} else {
				throw new Exception("Oops! $" . $this->unsetProperty . " value is unset");
				// throw new Exception('Oops! Something went wrong');
			}
		} catch (Exception $e) {
			$this->detailsInfo = ['Error Occurred' => $e->getMessage()];
		}

		return [
			'Greeting'	=> "Hello " . $this->userName . ", have a good day ",
			'Details'	=> $this->detailsInfo
		];
	}


	public function __unset($property): void
	{
		$this->unsetProperty = $property . ' = "' . $this->$property . '"';
		unset($this->$property);
	}
}

$object = new UnsetMethod();
$object->setPerson('Abdur Rahim Uddin');

//unset($object->bankAccount);
//print_r($object);
print_r($object->details());
