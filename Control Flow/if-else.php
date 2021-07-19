<?php 

echo ($name = 'username') ? 'Print the statement' : 'No need to print out';


if ($name = 'username') : 
	// code here..
elseif ($name = 'username') : 
	// code here..
else : 
	// code here..
endif;


if ($name = 'username') {
	// code here..
} elseif($name = 'username') {
	// code here..
} else {
	// code here..
}