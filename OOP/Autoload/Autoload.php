<?php

/*
 * Excluding Try and Catch Block
 *
spl_autoload_register(function ($class) {
	require_once 'Controllers/' . $class . '.php';
});

$crCtrl = new CreateController;
$reCtrl = new ReadController;
$upCtrl = new UpdateController;
$deCtrl = new DeleteController;
*/



/**
 * Including Try and Catch Block
 *
 */
spl_autoload_register(
	/**
	 * @throws Exception
	 */
	function ($class) {
	 	if (file_exists('Controllers/' . $class . '.php')) {
			require 'Controllers/' . $class . '.php';
		} else {
			throw new Exception('Oops! ' . $class . ' is not exist...' . PHP_EOL);
		}
	}
);

$crCtrl = $reCtrl = $upCtrl = $deCtrl = null;

try {
	$crCtrl = new CreateController;
	$reCtrl = new ReadController;
	$upCtrl = new UpdateController;
	$deCtrl = new DeleteController;
} catch (Exception $e) {
	echo $e->getMessage();
}

echo $crCtrl->index();
echo $reCtrl->index();
echo $upCtrl->index();
echo $deCtrl->index();
