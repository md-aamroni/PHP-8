<?php

/**
 * Content: TypeHinting
 *
 *
 *
 *
 * Valid Datatype used for TypeHinting:
 * 	int
 * 	float
 * 	string
 * 	bool
 * 	array
 * 	class or interface
 * 	object
 *
 * */

declare(strict_types = 1);

// Example 01:
class Request {
	public function admission(string $name, string $email, string $mobile, string $address): array{
		return array(
			'full_name' => $name,
			'email'     => $email,
			'mobile'    => $mobile,
			'address'   => $address,
		);
	}

	public function examination(string $section, int $roll, int $examTerm): array{
		return array(
			'section'   => $section,
			'roll_no'   => $roll,
			'exam_term' => $examTerm,
		);
	}
}

// $request     = new Request;
// $admission   = $request->admission('Kabir Khan', 'kabirkhan@gmail.com', '+880 1316-440504', 'Dhaka-1206, Bangladesh');
// $examination = $request->examination('Bangla', 12, 3);

// print_r($admission);
// print_r($examination);

class Student {
	public $request;

	public function information(Request $request) :array
	{
		$this->request = $request;
		return $request->admission('Kabir Khan', 'kabirkhan@gmail.com', '+880 1316-440504', 'Dhaka-1206, Bangladesh');
	}
}

$request = new Request;
$kabir = new Student;

print_r($kabir->information($request));
