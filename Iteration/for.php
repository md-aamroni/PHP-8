<?php 


// for ($i = 0; $i < 10; $i++) {
// 	echo $i . ' ';
// }


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


for ($n = 0; $n < count($users); $n++) : 
	echo '<pre>'; 
	print_r($users[$n]);
	echo '</pre>';
endfor;