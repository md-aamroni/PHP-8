<?php

require_once 'Controllers/Profile.php';

class TeacherProfile extends Profile
{
	public static function myProfile($name, $designation, $department, $email, $mobile, $address): array
	{
		return parent::getProfileDetails($name, $designation, $department, $email, $mobile, $address);
	}
}

print_r(TeacherProfile::myProfile('John Doe', 'Guest Lecturer', 'English', 'johndoe@gmail.com', '+880 1316-440504', 'Dhaka-1206, Bangladesh'));
