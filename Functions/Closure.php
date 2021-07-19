<?php

// TODO: Example of Convert Case Using Legacy Function Statement
function convertCase($sentence): array
{
	$string = strtolower($sentence);
	return array(
		'upper'  => strtoupper($string),
		'lower'  => $string,
		'camel'  => str_replace(' ', '', lcfirst(ucwords($string))),
		'kebab'  => str_replace(' ', '-', $string),
		'snake'  => str_replace(' ', '_', $string),
		'pascal' => str_replace(' ', '', ucwords($string))
	);
}

echo convertCase('product Controller')['snake'] . PHP_EOL;





// TODO: Example of Request Parsing Using Legacy Function Statement
function parseURL($request, $response): array
{
	return [
		$request => is_array($response) ? array_map(function ($res) {
			return $res;
		}, $response) : $response
	];
}

print_r(parseURL('GET', ['name' => 'Kabir Khan', 'email' => 'kabirkhan@gmail.com']));
print_r(parseURL('POST', 'Get all the users information'));





// TODO: Example of Convert Case Using CallBack or Closure Function Statement
function convertString($sentence, $callback)
{
	$string = strtolower($sentence);
	$result = array(
		'upper'  => strtoupper($string),
		'lower'  => $string,
		'camel'  => str_replace(' ', '', lcfirst(ucwords($string))),
		'kebab'  => str_replace(' ', '-', $string),
		'snake'  => str_replace(' ', '_', $string),
		'pascal' => str_replace(' ', '', ucwords($string))
	);

	if (is_callable($callback)) {
		call_user_func($callback, $result);
	}
}

convertString('product Controller', function ($string) {
	echo $string['camel'] . PHP_EOL;
});





// TODO: Example of Request Parsing Using CallBack or Closure Function Statement
function route($request, $response, $callback): array
{
	$result = array(
		$request => $response
	);

	if (is_callable($callback)) {
		call_user_func($callback, $result);
	}

	return $result;
}

route('GET', ['name' => 'Kabir Khan', 'email' => 'kabirkhan@gmail.com'], function ($arr) {
	print_r($arr);
});

route('POST', 'Get all the users information', function ($data) {
	print_r($data);
});
