<?php

class Profile
{
	public static string $fullName;
	public static string $designation;
	public static string $department;
	public static string $email;
	public static string $mobile;
	public static string $address;

	protected static function getProfileDetails($name, $designation, $department, $email, $mobile, $address): array
	{
		self::$fullName	 = $name;
		self::$designation = $designation;
		self::$department  = $department;
		self::$email		 = $email;
		self::$mobile		 = $mobile;
		self::$address		 = $address;

		return array(
			'full_name'		=> self::$fullName,
			'designation'	=> self::$designation,
			'department'	=> self::$department,
			'email_id'		=> self::$email,
			'mobile_no'		=> self::$mobile,
			'address'		=> self::$address
		);
	}
}
