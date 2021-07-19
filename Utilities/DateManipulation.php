<?php

namespace Utilities;

use DateInterval;
use DateTime;

class DateManipulation
{
	protected $month;
	protected $years;

	public function uptoCurrentMonth($isFull = false)
	{
		$months = [];
		$isFull = !empty($isFull) ? 12 : date('n');
		for ($m = 1; $m <= $isFull; ++$m) {
			array_push($months, date('M', mktime(0, 0, 0, $m, 1)));
		}
		return $months;
	}


	public function weekInMonths($month = false, $year = false)
	{
		$this->month = !empty($month) ? $month : date('M');
		$this->years = !empty($year) ? $year : date('Y');

		$array = [];
		$weeks = 1;
		$dates = new DateTime("$this->years-$this->month-01");
		$count = (int)$dates->format('t');
		$parse = new DateInterval('P1D');

		for ($day = 1; $day <= $count; $day++) {
			$array["Week No $weeks"] = $dates->format('Y-m-d');
			$dayOfWeek = $dates->format('l');
			if ($dayOfWeek === 'Sunday') {
				$weeks++;
			}
			$dates->add($parse);
		}

		return $array;
	}


	public function dateDifference($date)
	{
		$interval = date_diff(date_create($date), date_create(date("Y-m-d H:i:s")));

		$min 	= $interval->format('%i');
		$sec 	= $interval->format('%s');
		$hour	= $interval->format('%h');
		$mon 	= $interval->format('%m');
		$day 	= $interval->format('%d');
		$year = $interval->format('%y');

		if ($interval->format('%i%h%d%m%y') == "00000") {
			return $sec . " Sec ago";
		} else if ($interval->format('%h%d%m%y') == "0000") {
			return $min . " Min ago";
		} else if ($interval->format('%d%m%y') == "000") {
			return $hour . " Hours ago";
		} else if ($interval->format('%m%y') == "00") {
			return $day . " Days ago";
		} else if ($interval->format('%y') == "0") {
			return $mon . " Months ago";
		} else {
			return $year . " Years ago";
		}
	}


	public function timeCount($datetime, $full = false)
	{
		$now = new DateTime;
		$ago = new DateTime($datetime);
		$diff = $now->diff($ago);

		$diff->w = floor($diff->d / 7);
		$diff->d -= $diff->w * 7;

		$string = array(
			'y' => 'year',
			'm' => 'month',
			'w' => 'week',
			'd' => 'day',
			'h' => 'hour',
			'i' => 'minute',
			's' => 'second',
		);

		foreach ($string as $k => &$v) {
			if ($diff->$k) {
				$v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
			} else {
				unset($string[$k]);
			}
		}

		if (!$full) $string = array_slice($string, 0, 1);
		return $string ? implode(', ', $string) : 'just now';
	}
}

$object = new DateManipulation();
print_r($object->weekInMonths());
print_r($object->dateDifference('2021-06-23 04:50'));
print_r($object->uptoCurrentMonth());
//print_r($object->timeCount('2021-06-23 04:50', true));
