<?php

/**
 * Content		: __sleep()
 * Description	:
 * 	__unset() is invoked when unset() is used on inaccessible
 * 	(protected or private) or non-existing properties.
 *
 */

declare(strict_types = 1);

class SleepMethod
{
	public string $platform;
	public string $token;
	public string $latitude;
	public string $longitude;

	public function clientDevice(string $param) : array
	{
		$this->platform = $param;

		if (!empty($this->platform) || isset($this->platform)) {
			$this->token 		= sha1($this->platform);
			$this->latitude	= rand(20, 50) . '.' . rand(00000, 50000);
			$this->longitude	= rand(50, 99) . '.' . rand(50000, 99999);
		}

		return array(
			'Platform'	=> $this->platform,
			'Token'		=> $this->token,
			'Latitude'	=> $this->latitude,
			'Longitude'	=> $this->longitude
		);
	}

	public function __sleep() :array
	{
		return array('platform', 'token');
	}
}

$object = new SleepMethod();
$object->clientDevice('Google Chrome 88.7');

$convertSerialize = serialize($object);
print_r($convertSerialize) . PHP_EOL;

$convertArray = unserialize($convertSerialize);
print_r($convertArray) . PHP_EOL;
