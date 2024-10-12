<?php

// TODO: PDO Exception Handling
try {
	$driver = 'mysql';
	$dbHost = 'localhost';
	$dbName = 'test';
	$dbChar = 'utf8mb4';
	$dbUser = 'root';
	$dbPass = '';

	$connect = new PDO('' . $driver . ':host=' . $dbHost . ';dbname=' . $dbName . ';charset=' . $dbChar . '', $dbUser, $dbPass);

	if ($connect) {
		$sqlCode = 'SELECT * FROM employees';
		$queries = $connect->prepare($sqlCode);
		$queries->execute();
		$isError = $queries->errorInfo();
		if (is_array($isError) && !empty($isError[1])) {
			$datalist = [
				'code' => $queries->errorCode(),
				'type' => $isError[1],
				'info' => $isError[2],
			];
		} else {
			$datalist = $queries->fetchAll(PDO::FETCH_ASSOC);
		}

		print_r($datalist);
	} else {
		throw new PDOException('Oops! Unable to connect ' . $dbName . ' database');
	}
} catch (PDOException $e) {
	print_r(ucfirst($e->getMessage()));
}
