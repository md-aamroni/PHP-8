<?php

/**
 * Content 	: While Loop
 * Date 		:
 * Features :
 *
 */

$i = 1;

do {
	echo "Serial No. " . $i . " <br/>";
	$i++;
} while ($i <= 10);



$users = array(
	array(
		'name'	=> 'Kabir Khan',
		'email'	=> 'kabir.khan@gmail.com',
		'mobile'	=> '+880 1647-754123'
	),
	array(
		'name'	=> 'Zaber Muhammad',
		'email'	=> 'zaber.muhammad@gmail.com',
		'mobile'	=> '+880 1451-845232'
	),
	array(
		'name'	=> 'Rahim Hossain',
		'email'	=> 'hossain.rahim@gmail.com',
		'mobile'	=> '+880 01745-453362'
	)
);


$n = 0;
do {
	echo '<pre>';
	print_r($users[$n]);
	echo '</pre>';
	$n++;
} while ($n < count($users));
