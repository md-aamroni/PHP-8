<?php

/**
 *
 */
class Call {
	private $name;
	private $email;
	private $mobile;
	private $street;
	private $city;
	private $country;
	private $details;

	private function userInfo($name, $email, $mobile) {
		$this->name   = $name;
		$this->email  = $email;
		$this->mobile = $mobile;

		$this->details = ['name' => $this->name, 'email' => $this->email, 'mobile' => $this->mobile];
		return $this->details;
	}

	private function userAddress($street, $city, $country) {
		$this->street  = $street;
		$this->city    = $city;
		$this->country = $country;

		$this->details = ['street' => $this->street, 'city' => $this->city, 'country' => $this->country];
		return $this->details;
	}

	public function __call($method, $args) {
		return ['messages' => 'Oops! unable to access on private "' . $method . '"" method', 'argument' => $args];
	}
}

$object = new Call();

echo '<pre>';
print_r($object->userInfo('Kabir Khan', 'kabir.khan@gmail.com', '+88 01645-770422'));
print_r($object->userAddress('Basundhara Shopping Complex, Pathapath', 'Dhaka-1206', 'Bangladesh'));
echo '</pre>';