<?php

require_once 'Calculator/Circle.php';
require_once 'Calculator/Square.php';
require_once 'Calculator/Triangle.php';
require_once 'Controllers/ShapeGenerator.php';

use App\OpenClosed as OC;

$square = new OC\Square(40);
$circle = new OC\Circle(15);
$tangle = new OC\Triangle(8, 12);

$shapes = new OC\ShapeGenerator($circle, $tangle);
$shapes->run();
