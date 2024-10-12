<?php

// TODO: Example of Remove White Space Using Legacy Function
function whiteSpace(string $arg): string
{
	if (strpos($arg, ' ')) {
		return str_replace(' ', '', $arg);
	} else {
		return $arg;
	}
}

echo whiteSpace('say hello world') . PHP_EOL;





// TODO: Example of Extract A String With Total Usage Using Legacy Function
function stringValues(string $str): array
{
	$split = str_split(whiteSpace($str));
	return array_map(function ($arg, $count) {
		return [
			'chars' => $arg,
			'total' => $count
		];
	}, array_unique($split), array_count_values($split));
}

print_r(stringValues('programming is all about copy and paste'));





// TODO: Example of Remove White Space Using Arrow Function
$removeSpace = fn(string $arg) => (strpos($arg, ' ')) ? str_replace(' ', '', $arg) : $arg;
echo $removeSpace('say hello world') . PHP_EOL;





// TODO: Example of Extract A String With Total Usage Using Arrow Function
$charsValues = fn(string $str) => array_map(fn($chars, $total) => compact('chars', 'total'), array_unique(str_split($removeSpace($str))), array_count_values(str_split($removeSpace($str))));
print_r($charsValues('programming is all about copy and paste'));
