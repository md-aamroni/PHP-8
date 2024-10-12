<?php

namespace Utilities;

class DistanceCalculator
{
	private $latitudeFrom;
	private $longitudeFrom;
	private $latitudeTo;
	private $longitudeTo;
	private $convertUnit;

	public function __construct($lat1, $lon1, $lat2, $lon2, $unit = "N")
	{
		$this->latitudeFrom	= $lat1;
		$this->longitudeFrom	= $lon1;
		$this->latitudeTo		= $lat2;
		$this->longitudeTo	= $lon2;
		$this->convertUnit	= $unit;
	}

	private function calculate()
	{
		$theta	= $this->longitudeFrom - $this->longitudeTo;
		$dist		= sin(deg2rad($this->latitudeFrom)) * sin(deg2rad($this->latitudeTo)) + cos(deg2rad($this->latitudeFrom)) * cos(deg2rad($this->latitudeTo)) * cos(deg2rad($theta));
		$miles	= rad2deg(acos($dist)) * 60 * 1.1515;
		$unit		= strtoupper($this->convertUnit);

		if ($unit == "K") {
			return sprintf('%.2f Kilometres', $miles * 1.609344);
		} else {
			return sprintf('%.2f Nautical Miles', $miles * 0.8684);
		}
	}

	public function run()
	{
		return $this->calculate();
	}
}

$distance = new DistanceCalculator('23.6343304', '90.4893884', '24.3634014', '88.6048212', 'K');
echo $distance->run();
