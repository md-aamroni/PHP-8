<?php

require_once 'Controllers/ProfileController.php';

class ManagerProfile extends ProfileController
{
	public function __construct()
	{
		// TODO: Your Code Here..
	}
}

$saleh = new ManagerProfile();
print_r($saleh->information('Saleh Ahmed', 37, 'Head of Department'));
