<?php

class ParentClass
{
	public static string $userName = "John Doe";

	public static function setUserName(): string
	{
		return self::$userName;
	}

	public static function getUserName(): string
	{
		return static::$userName;
	}
}
