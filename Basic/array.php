<?php

/**
 * Definition and Usage:
 * 	array() creates an array, with keys and values. If
 * you skip the keys when you specify an array, an integer
 * key is generated, starting at 0 and increases by 1 for
 * each value.
 *
 *
 * Syntax:
 * 	array(key => value)
 *
 * 	key     - 	Optional. Specifies the key, of type numeric
 *                or string. If not set, an integer key is
 *                generated, starting at 0.
 * 	value   - 	Required. Specifiee the value.
 *
 */

// Example 1:
$fruits = array(
	'a' => 'Apple',
	'b' => 'Banana',
	'c' => 'Capsicum',
);

print_r($fruits);

/**
 * The output of the code above will be:
 * Array ([a] => Apple [b] => Banana [c] => Capsicum)
 */



// Example 2:
$animal = array('Dog', 'Cat', 'Horse');

print_r($animal);

/**
 * The output of the code above will be:
 * Array ([1] => Dog [2] => Cat [3] => Horse)
 */



// Example 3:
$students = array(
	'rahim' => array(
		'fullName' => 'Adbur Rahim',
		'age'      => 27,
		'address'  => array(
			'city'     => 'Block-A, Road-12, Dhanmondi',
			'postCode' => '1435',
			'district' => 'Dhaka',
		),
	),
	'karim' => array(
		'fullName' => 'Karim Khan',
		'age'      => 31,
		'address'  => array(
			'city'     => 'Block-C, Road-37, Rampura',
			'postCode' => '1310',
			'district' => 'Dhaka',
		),
	),
	'saleh' => array(
		'fullName' => 'Saleh Ahmed',
		'age'      => 42,
		'address'  => array(
			'city'     => 'Block-F, Road-6, Banani',
			'postCode' => '1245',
			'district' => 'Dhaka',
		),
	),
);

// Example 4:
$students = [
	'rahim' => [
		'fullName' => 'Adbur Rahim',
		'age'      => 27,
		'address'  => [
			'city'     => 'Block-A, Road-12, Dhanmondi',
			'postCode' => '1435',
			'district' => 'Dhaka',
		],
	],
	'karim' => [
		'fullName' => 'Karim Khan',
		'age'      => 31,
		'address'  => [
			'city'     => 'Block-C, Road-37, Rampura',
			'postCode' => '1310',
			'district' => 'Dhaka',
		],
	],
	'saleh' => [
		'fullName' => 'Saleh Ahmed',
		'age'      => 42,
		'address'  => [
			'city'     => 'Block-F, Road-6, Banani',
			'postCode' => '1245',
			'district' => 'Dhaka',
		],
	],
];

print_r($students);

/**
 * The output of the code above will be:
 *
 * Array
 * (
 * 	[rahim] => Array
 * 		(
 * 			[fullName] => Adbur Rahim
 * 			[age] => 27
 * 			[address] => Array
 * 				(
 * 					[city] => Block-A, Road-12, Dhanmondi
 * 					[postCode] => 1435
 * 					[district] => Dhaka
 * 				)
 * 	 	)
 * 	[karim] => Array
 * 		(
 * 			[fullName] => Adbur Rahim
 * 			[age] => 27
 * 			[address] => Array
 * 				(
 * 					[city] => Block-A, Road-12, Dhanmondi
 * 					[postCode] => 1435
 * 					[district] => Dhaka
 * 				)
 * 	 	)
 * 	[saleh] => Array
 * 		(
 * 			[fullName] => Saleh Ahmed
 * 			[age] => 42
 * 			[address] => Array
 * 				(
 * 					[city] => Block-F, Road-6, Banani
 * 					[postCode] => 1245
 * 					[district] => Dhaka
 * 				)
 * 	 	)
 * )
 *
 */
