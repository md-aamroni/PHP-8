<?php

namespace Utilities;

class InvoiceAmount
{
	public static function init($num, $sentenceCase = false)
	{
		$ones = ["ZERO", "ONE", "TWO", "THREE", "FOUR", "FIVE", "SIX", "SEVEN", "EIGHT", "NINE", "TEN", "ELEVEN", "TWELVE", "THIRTEEN", "FOURTEEN", "FIFTEEN", "SIXTEEN", "SEVENTEEN", "EIGHTEEN", "NINETEEN", "014" => "FOURTEEN"];
		$tens = ["ZERO", "TEN", "TWENTY", "THIRTY", "FORTY", "FIFTY", "SIXTY", "SEVENTY", "EIGHTY", "NINETY"];
		$hundreds = ["HUNDRED", "THOUSAND", "MILLION", "BILLION", "TRILLION", "QUARDRILLION"]; // Limit to Quadrillion
		$num = number_format($num, 2, ".", ",");
		$num_arr = explode(".", $num);
		$wholesome = $num_arr[0];
		$decorum = $num_arr[1];
		$whole_arr = array_reverse(explode(",", $wholesome));
		krsort($whole_arr, 1);
		$returnString = "";

		foreach ($whole_arr as $key => $i) {
			while (substr($i, 0, 1) == "0")
				$i = substr($i, 1, 5);
			if ($i < 20) {
				@$returnString .= $ones[$i];
			} elseif ($i < 100) {
				if (substr($i, 0, 1) != "0") $returnString .= $tens[substr($i, 0, 1)];
				if (substr($i, 1, 1) != "0") $returnString .= " " . $ones[substr($i, 1, 1)];
			} else {
				if (substr($i, 0, 1) != "0") $returnString .= $ones[substr($i, 0, 1)] . " " . $hundreds[0];
				if (substr($i, 1, 1) != "0") $returnString .= " " . $tens[substr($i, 1, 1)];
				if (substr($i, 2, 1) != "0") $returnString .= " " . $ones[substr($i, 2, 1)];
			}

			if ($key > 0) {
				$returnString .= " " . $hundreds[$key] . " ";
			}
		}

		if ($decorum > 0) {
			$returnString .= " and ";
			if ($decorum < 20) {
				$returnString .= $ones[$decorum];
			} elseif ($decorum < 100) {
				$returnString .= $tens[substr($decorum, 0, 1)];
				$returnString .= " " . $ones[substr($decorum, 1, 1)];
			}
		}

		if (!is_null($sentenceCase) && $sentenceCase === true) {
			return ucwords(strtolower($returnString));
		} else {
			return $returnString;
		}
	}
}

echo InvoiceAmount::init(1250, true);
