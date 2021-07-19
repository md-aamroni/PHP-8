<?php

require_once 'irrelevant/ShapeCalculator.php';
require_once 'irrelevant/SalaryGenerator.php';

require_once 'appropriate/area/Circle.php';
require_once 'appropriate/area/Square.php';
require_once 'appropriate/area/Triangle.php';
require_once 'appropriate/AreaCalculator.php';

require_once 'appropriate/data/Employee.php';
require_once 'appropriate/data/Payroll.php';
require_once 'appropriate/HumanResource.php';


use App\SingleResponsibility as SRP;


// TODO: Example (Bad Design Pattern) No 01:
$shape = new SRP\ShapeCalculator();
$shape->areaOfSquare(15);
$shape->areaOfCircle(20);
$shape->areaOfTriangle(15, 2);



// TODO: Example (Bad Design Pattern) No 02:
$staff = new SRP\SalaryGenerator('John Doe', 'Software Developer', 'ABC Private Co. Ltd.', '15000');
print_r($staff->salarySheet());



// TODO: Example (Good Design Pattern) No 03:
$square = new SRP\Square(20);
$circle = new SRP\Circle(15);
$tangle = new SRP\Triangle(8, 2);

$area = new SRP\AreaCalculator($square, $circle, $tangle);
$area->shapeGenerate();



// TODO: Example (Good Design Pattern) No 04:
$rashid = new SRP\Employee('Md. Abdur Rashid', 'Professional Graphics Designer', 'XYZ Internation Limited');
$salary = new SRP\Payroll(6500);

$hrm = new SRP\HumanResource($rashid, $salary);
print_r($hrm->statement());

