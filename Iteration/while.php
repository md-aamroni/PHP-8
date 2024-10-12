<?php

/**
 * Content 	: While Loop
 * Date 		:
 * Features :
 *
 */

$i = 1;
while ($i <= 10) {
	echo "Serial No. " . $i . " <br/>";
	$i++;
}


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
while ($n < count($users)) {
	echo '<pre>';
	print_r($users[$n]);
	echo '</pre>';
	$n++;
}
