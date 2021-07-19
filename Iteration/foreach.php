<?php 

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


// foreach ($users as $user) {
// 	echo '<pre>'; 
// 	// print_r($n);
// 	print_r($user);
// 	echo '</pre>';
// };

foreach ($users as $user) :
	echo '<pre>'; 	
	print_r($user);
	echo '</pre>';
endforeach;