<?php

// $x = 10;
// $y = &$x;
// $y = 20;

// echo "The value of [x] is: " . $x . "\n";
// echo "The value of [y] is: " . $y . "\n";

class CloneClass
{
	public $fullName;

	public function __construct($name) {
		$this->fullName = $name;
		echo "Hey " . $this->fullName . " Have a good day \n";
	}
}

$kabir	= new CloneClass('Kabir Khan');
$jhon		= clone $kabir;
$jhon->fullName = 'Jhon Doe';

echo $kabir->fullName . "\n";
echo $jhon->fullName . "\n";

const App = 'Something';

echo App . "\n";;

$constants = get_defined_constants();
echo '<pre>';
print_r($constants); // pretty large list
echo '</pre>';