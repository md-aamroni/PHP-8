<?php

/**
 * Content 	: Isset
 * Date 		: 
 * Features	:
 *
 */

# Example: 01
class Organization {
	private $title;
	private $address;
	private $city;
	private $email;
	private $mobile;

	public $details;
	public $property;

	public function profile() {
		$this->title 		= 'ABC International Company Ltd.';
		$this->address 	= 'Bashundhra City, Panthapath';
		$this->city 		= 'Dhaka-1206';
		$this->email 		= 'info.admin@abc.org';
		$this->mobile 		= '+880 1459-875421';

		return $this->details = [
			'title'	=> $this->title,
			'address'=> $this->address,
			'city'	=> $this->city,
			'email'	=> $this->email,
			'mobile'	=> $this->mobile
		];
	}

	public function __isset($param) {
		return $this->property = $param;
	}
}

$abc = new Organization;
// print_r($abc->profile());
echo isset($abc->property);