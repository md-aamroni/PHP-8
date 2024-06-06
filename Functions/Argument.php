<?php

















$string = 'life is all about next steps...';

// TODO: Example of Argument Value
function argVal($val): string
{
	return $val . PHP_EOL;
}

echo argVal($string);





// TODO: Example of Argument Reference
function argRef(&$ref): string
{
	$ref = 'programming is all about copy and paste...';
	return $ref . PHP_EOL;
}

echo argRef($string);
echo 'Print again => ' . argVal($string);


function statement(&$stmt): string
{
	return $stmt = 'call by reference' . PHP_EOL;
}

$states = 'This function is ';
echo statement($states);
