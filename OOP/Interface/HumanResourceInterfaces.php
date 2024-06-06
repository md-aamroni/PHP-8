<?php

interface HumanResourceInterfaces
{
	public function profile($fName, $lName, $age, $email, $mobile);
	public function profession($designation, $organization, $location);
	public function address($street, $city, $country);
	public function excerptDetails();
}
