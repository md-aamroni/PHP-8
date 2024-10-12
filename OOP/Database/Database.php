<?php

/**
 * Content 		: Database
 * Date 			: Jun 04, 2021
 * Features 	:
 *
 *
 */

class Database {
	protected string $driver = 'mysql';
	protected string $dbHost = 'localhost';
	protected string $dbname = 'oop_appliction_rdb';
	protected string $dbUser = 'root';
	protected string $dbPass = '';
	protected string $handler;
	protected string $collation = 'utf8mb4';
	protected string $table = 'employees';

	public PDO $connect;

	public function __construct() {
		$this->handler = $this->driver . ':host=' . $this->dbHost . ';dbname=' . $this->dbname . ';charset=' . $this->collation;
		$this->connect = new PDO($this->handler, $this->dbUser, $this->dbPass);

		try {
			if ($this->connect) {
				$this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function all() : bool
	{
		$statements = "SELECT * FROM $this->table";
		$sqlQueries = $this->connect->prepare($statements);

		try {
			if ($sqlQueries->execute()) {
				$dataLists = $sqlQueries->fetchAll(PDO::FETCH_ASSOC);
				$rowSelect = $sqlQueries->rowCount();

				if ($rowSelect > 0) {
					return $dataLists;
				}
			} else {
				throw new Exception('Something went wrong');
			}
		} catch (Exception $e) {
			return [$e->getMessage()];
		}

		return true;
	}

	public function find($id, $isSingle = false) :array
	{
		$statements = "SELECT * FROM $this->table WHERE id = $id";
		$sqlQueries = $this->connect->prepare($statements);

		try {
			if ($sqlQueries->execute()) {
				$dataLists = $sqlQueries->fetchAll(PDO::FETCH_ASSOC);
				$rowSelect = $sqlQueries->rowCount();

				if ($rowSelect > 0) {
					if (is_bool($isSingle) && $isSingle === true) {
						return $dataLists[0];
					} else {
						return $dataLists;
					}
				}
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function store($name, $email, $mobile, $gender, $profession, $address, $company, $city) {
		$statements = "INSERT INTO $this->table ( full_name, email, mobile, gender, profession, address, company, city, created_at ) VALUES ( :FULL_NAME, :EMAIL, :MOBILE, :GENDER, :PROFESSION, :ADDRESS, :COMPANY, :CITY, :CREATED_AT )";

		$sqlQueries = $this->connect->prepare($statements);
		$dataValues = array(
			':FULL_NAME'  => $name,
			':EMAIL'      => filter_var($email, FILTER_VALIDATE_EMAIL),
			':MOBILE'     => $mobile,
			':GENDER'     => $gender,
			':PROFESSION' => $profession,
			':ADDRESS'    => $address,
			':COMPANY'    => $company,
			':CITY'       => $city,
			':CREATED_AT' => date('Y-m-d H:i:s'),
		);

		try {
			if ($sqlQueries->execute($dataValues)) {
				$totalStore = $sqlQueries->rowCount();
				$lastInsert = $this->connect->lastInsertId();

				if ($lastInsert > 0) {
					return array(
						'totalStorage' => $totalStore,
						'lastInsertID' => $lastInsert,
					);
				}
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function update($name, $email, $mobile, $gender, $profession, $address, $company, $city, $id) :string
	{
		$statements = "UPDATE $this->table SET full_name = :FULL_NAME, email = :EMAIL, mobile = :MOBILE, gender = :GENDER, profession = :PROFESSION, address = :ADDRESS, company = :COMPANY, city = :CITY, updated_at = :UPDATED_AT WHERE id = :UPDATE_ID";

		$sqlQueries = $this->connect->prepare($statements);
		$dataValues = array(
			':FULL_NAME'  => $name,
			':EMAIL'      => filter_var($email, FILTER_VALIDATE_EMAIL),
			':MOBILE'     => $mobile,
			':GENDER'     => $gender,
			':PROFESSION' => $profession,
			':ADDRESS'    => $address,
			':COMPANY'    => $company,
			':CITY'       => $city,
			':UPDATED_AT' => date('Y-m-d H:i:s'),
			':UPDATE_ID'  => $id,
		);

		try {
			if ($sqlQueries->execute($dataValues)) {
				return $sqlQueries->rowCount();
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}

	public function delete($id) :string
	{
		$statements = "DELETE FROM $this->table WHERE id = :ID";
		$sqlQueries = $this->connect->prepare($statements);
		$dataValues = array(':ID' => $id);

		try {
			if ($sqlQueries->execute($dataValues)) {
				$rowNumber = $sqlQueries->rowCount();

				if ($rowNumber > 0) {
					return $rowNumber;
				}
			}
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
}

$db = new Database;


$allEmployees = $db->all();
$findEmployee = $db->find(22, true);
$addNewEmploy = $db->store('Kabir Khan', 'kabir@gmail.com', '191-110-4547', 'Male', 'Applicaton Developer', 'Panthapath-1206', 'Freelancing', 'Dhaka');
$deleteEmploy = $db->delete(22);
$updateEmploy = $db->update('Jhon Doe', 'jhon@gmail.com', '191-110-4547', 'Female', 'Applicaton Developer', 'Panthapath-1206', 'Freelancing', 'Dhaka', 22);

