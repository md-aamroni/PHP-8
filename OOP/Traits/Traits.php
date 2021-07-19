<?php

/**
 * Definition and Usage:
 *		A Trait is similar to a class. Trait is intended to reduce some limitations
 * of single inheritance by enabling a developer to reuse sets of methods freely in
 * several independent classes living in different class hierarchies.
 *
 *
 * */

// Example 01:
trait Student {
	public $fullName;
	public $classNo;
	public $rollNo;
	public $fatherName;
	public $motherName;
	public $contact;
	public $address;

	public function student($name, $class, $roll) {
		$this->fullName = $name;
		$this->classNo  = $class;
		$this->rollNo   = $roll;

		return [
			'full_name' => $this->fullName,
			'class_no'  => $this->classNo,
			'roll_no'   => $this->rollNo,
		];
	}

	public function parents($father, $mother, $contact, $address) {
		$this->fatherName = $father;
		$this->motherName = $mother;
		$this->contact    = $contact;
		$this->address    = $address;

		return [
			'father_name' => $this->fatherName,
			'mother_name' => $this->motherName,
			'contact'     => $this->contact,
			'address'     => $this->address,
		];
	}
}

class StudentInformation {
	use Student;

	public function details($name, $class, $roll, $father, $mother, $contact, $address) {
		return array(
			'student' => $this->student($name, $class, $roll),
			'parents' => $this->parents($father, $mother, $contact, $address),
		);
	}
}

$info  = new StudentInformation;
$rahim = $info->details('Abdur Rahim', '4', '17', 'Md. Abdur Rahman', 'Karimunnessa', '+88 01645 770422', 'Dhaka-1206, Bangladesh');

print_r($rahim);

/**
 * The output of the code above will be:
 *
 * Array
 * (
 * 	[student] => Array
 * 		(
 * 			[fullname] => Abdur Rahim
 * 			[class_no] => 4
 * 			[roll_no] => 17
 * 		)
 * 	[parents] => Array
 * 		(
 * 			[father_name] => Md. Abdur Rahman
 * 			[mother_name] => Karimunnessa
 * 			[contact] => +88 01645 770422
 * 			[address] => Dhaka-1206, Bangladesh
 * 		)
 * )
 * */




// Example 02:
trait Shape {
	public $length;
	public $radius;
	public $shape;

	public function area($area) {
		echo $this->circle($area) . "\n" . $this->square($area) . "\n";
	}

	public function circle($radius) {
		$this->radius = $radius;
		$this->shape  = pi() * pow($this->radius, 2);

		return "Area of circle is: " . sprintf('%.2f', $this->shape);
	}

	public function square($length) {
		$this->length = $length;
		$this->shape  = pow($this->length, 2);

		return "Area of square is: " . sprintf('%.0f', $this->shape);
	}
}

class ShapeGenerator {
	public $length;
	public $radius;
	public $shape;

	public function area($area) {
		echo $this->circle($area) . "\n" . $this->square($area) . "\n";
	}

	public function circle($radius) {
		$this->radius = $radius;
		$this->shape  = pi() * pow($this->radius, 3);

		return "Area of circle is: " . sprintf('%.2f', $this->shape);
	}

	public function square($length) {
		$this->length = $length;
		$this->shape  = pow($this->length, 3);

		return "Area of square is: " . sprintf('%.0f', $this->shape);
	}
}

class DrawShape extends ShapeGenerator {
	use ShapeGenerate;

	public function area($area) {
		echo $this->circle($area) . "\n" . $this->square($area) . "\n";
	}

	public function circle($radius) {
		$this->radius = $radius;
		$this->shape  = pi() * pow($this->radius, 4);

		return "Area of circle is: " . sprintf('%.2f', $this->shape);
	}

	public function square($length) {
		$this->length = $length;
		$this->shape  = pow($this->length, 4);

		return "Area of square is: " . sprintf('%.0f', $this->shape);
	}
}

$a = new DrawShape;
$a->area(30);

/**
 * The output of the code above will be:
 *
 * Area of circle is: 2827.43
 * Area of square is: 900
 *
 * Note: The DrawShape class is used ShapeGenerate trait and also extended the
 * 		ShapeGenerator class. So according to order precedence if DrawShape
 * 		use same methods and/or properties then it will be overriding traits
 * 		and parent class. But if DrawShape doesn't override traits or parent
 * 		class then priority will be execute trait first.
 *
 * */



// Example 03:
trait SayHello {
	public function index() {
		echo "Hello";
	}
}

trait SayWorld {
	public function index() {
		echo "World";
	}
}
