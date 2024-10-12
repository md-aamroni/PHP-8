<?php

namespace App;

use Exception;

class JsonCrudController
{
	private string $fileName = 'users.json';

	protected function dataModel()
	{
		try {
			if (file_exists('app/Models/' . $this->fileName)) {
				return json_decode(file_get_contents('app/Models/' . $this->fileName, true));
			} else {
				fopen('app/Models/' . $this->fileName, 'w+');
				throw new Exception('Congratulation! ' . $this->fileName . ' is created successfully');
			}
		} catch (Exception $e) {
//			return $e->getMessage();
			return false;
		}
	}


	/**
	 * Fetch All Records
	 *
	 * @return mixed|string
	 */
	public function all()
	{
		return $this->dataModel();
	}


	/**
	 * Fetch A Single Record
	 *
	 * @param void
	 * @return void
	 */
	public function find($id)
	{
		// TODO: Implement find() method
	}


	/**
	 * Create A New Data
	 *
	 * @param $name
	 * @param $email
	 * @param $mobile
	 * @param $age
	 * @param $gender
	 * @param $profession
	 * @param $agree
	 * @return bool
	 */
	public function create($name, $email, $mobile, $age, $gender, $profession, $agree): bool
	{
		$dataSet = array(
			'fullName' => trim(addslashes($name)),
			'email' => trim(addslashes($email)),
			'mobile'	=> trim(addslashes($mobile)),
			'age'	=> trim(addslashes($age)),
			'gender'	=> !empty($gender) ? $gender : 'Male',
			'profession' => trim(addslashes($profession)),
			'agree' => !empty($agree) ? $agree : 'No',
			'created' => date('D j M Y')
		);

		if (file_put_contents('app/Models/' . $this->fileName, json_encode($dataSet), FILE_APPEND)) {
			return true;
		} else {
			return false;
		}
	}


	/**
	 * Edit An Existing Data
	 *
	 * @param int
	 * @return void
	 */
	public function edit($id)
	{
		// TODO: Implement edit() method
	}


	/**
	 * Update An Existing Data
	 *
	 * @param int
	 * @return void
	 */
	public function update($id)
	{
		//	TODO: Implement update() method
	}


	/**
	 * Delete An Existing Data
	 *
	 * @param int
	 * @return void
	 */
	public function delete($id)
	{
		// TODO: Implement delete() method
	}
}
