<?php

echo 'Current line no is => ' . __LINE__ . PHP_EOL;

echo 'Current file path is => ' . __FILE__ . PHP_EOL;

echo 'Current directory is => ' . __DIR__ . PHP_EOL;

function getFunction() {
	echo 'Current function is => ' . __FUNCTION__ . PHP_EOL;
}
getFunction();
