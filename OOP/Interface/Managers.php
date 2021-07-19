<?php

require_once 'HumanResourceInterfaces.php';

class Managers implements HumanResourceInterfaces
{
	private array $biography = [];
	private array $summaries = [];

	public function __construct()
	{
		echo 'This class is represent for ' . __CLASS__ . PHP_EOL;
	}

	public function profile($fName, $lName, $age, $email, $mobile): void
	{
		array_push($this->biography, ['first_name' => $fName, 'last_name' => $lName, 'age' => $age, 'email' => $email, 'mobile' => $mobile]);
	}

	public function profession($designation, $organization, $location): void
	{
		array_push($this->biography, ['designation' => $designation, 'organization' => $organization, 'location' => $location]);
	}

	public function address($street, $city, $country): void
	{
		array_push($this->biography, ['street' => $street, 'city' => $city, 'country' => $country]);
	}

	public function excerptDetails(): array
	{
		if (!empty($this->biography) && is_array($this->biography)) {
			$index = $value = [];

			foreach ($this->biography as $bio) {
				foreach ($bio as $n => $each) {
					$index[] = $n;
					$value[] = $each;
				}
			}

			if (is_array($index) && is_array($value)) {
				$this->summaries = array_combine($index, $value);
			}
		}

		return $this->summaries;
	}
}

$kabir = new ManagerProfile();
$kabir->profile('Md. Kabir', 'Khan', 32, 'kabir.khan@gmail.com', '+88 01316-440497');
$kabir->profession('Technical Manager', 'ABC International Limited', 'Dhaka-1206, Bangladesh');
$kabir->address('Pathapath-1206', 'Dhaka', 'Bangladesh');

print_r($kabir->excerptDetails());
