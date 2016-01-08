<?php
	
	function wordify ($x) {
		// Works for 1 .. 1000
		
		static $lookup = array(
			1 => 'one',
			2 => 'two',
			3 => 'three',
			4 => 'four',
			5 => 'five',
			6 => 'six',
			7 => 'seven',
			8 => 'eight',
			9 => 'nine',
			10 => 'ten',
			11 => 'eleven',
			12 => 'twelve',
			13 => 'thirteen',
			14 => 'fourteen',
			15 => 'fifteen',
			16 => 'sixteen',
			17 => 'seventeen',
			18 => 'eighteen',
			19 => 'nineteen',
			20 => 'twenty',
			30 => 'thirty',
			40 => 'forty',
			50 => 'fifty',
			60 => 'sixty',
			70 => 'seventy',
			80 => 'eighty',
			90 => 'ninety',
		);
		
		if (array_key_exists($x, $lookup)) {
			return $lookup[$x];
		}
		
		if ($x == 1000) {
			return 'one thousand';
		}
		
		if ($x >= 100) {
			$subResult = wordify(intval($x / 100)) . ' hundred';
			$rest = $x % 100;
			if ($rest > 0) {
				$subResult .= ' and ' . wordify($rest);
			}
			return $subResult;
		}
		
		if ($x > 10) {
			$subResult = wordify(10*intval($x / 10));
			$rest = $x % 10;
			if ($rest > 0) {
				$subResult .= wordify($rest);
			}
			return $subResult;
		}
		
		trigger_error('Unreachable code reached for x=' . $x . '.', E_USER_ERROR);
	}
	
	function countWordChars ($word) {
		$temp = preg_replace('/[^a-zA-Z]/', '', $word);
		return strlen($temp);
	}
	
	$sum = 0;
	for ($i = 1; $i <= 1000; ++$i) {
		$sum += countWordChars(wordify($i));
	}
	printf('The answer is %d.' . "\n", $sum);
	
?>

