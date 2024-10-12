<?php

require_once 'AbstractClass.php';

class Students extends AbstractClass
{
	public function information($name, $email, $mobile, $address)
	{
		// TODO: Implement information() method.
	}

	public function classRoutine($class, $subject, $start, $end)
	{
		// TODO: Implement classRoutine() method.
	}
}

$admission = new Students();

//print_r($admission->information('Jhon Doe', 'jhondoe@gmail.com', '+88 01645-770422', 'Dhaka-1206, Bangladesh'));
//print_r($admission->information('Kabir Khan', 'kabirkhan@gmail.com', '+88 01785-654512', 'Dhaka-1206, Bangladesh'));
//print_r($admission->classRoutine('Class One', 'English', date('h:i a'), date('h:i a', strtotime('+44 minutes'))));
//print_r($admission->classRoutine('Class Two', 'Social Science', date('h:i a', strtotime('+45 minutes')), date('h:i a', strtotime('+89 minutes'))));


