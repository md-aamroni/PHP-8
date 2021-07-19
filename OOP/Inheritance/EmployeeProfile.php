<?php

require_once 'Controllers/ProfileController.php';

class EmployeeProfile extends ProfileController
{
	public function __construct()
	{
		// TODO: Your Code Here..
	}
}

$rahim = new EmployeeProfile();
print_r($rahim->information('Abdur Rahim', 32, 'Graphic Designer'));


