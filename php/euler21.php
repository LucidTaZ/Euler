<?php
	
	function divisorSum ($x) {
		$max = sqrt($x);
		$sum = 1; // x%1=0
		for ($i = 2; $i <= $max; ++$i) {
			if ($x % $i == 0) {
				$sum += $i + $x / $i;
			}
		}
		return $sum;
	}
	
	function isAmicable ($x) {
		$divSum1 = divisorSum($x);
		$divSum2 = divisorSum($divSum1);
		return $divSum2 == $x && $divSum1 != $divSum2;
	}
	
	function sumAmicableNumbers ($max) {
		$sum = 0;
		for ($i = 1; $i < $max; ++$i) {
			if (isAmicable($i)) {
				$sum += $i;
			}
		}
		return $sum;
	}
	
	var_dump(sumAmicableNumbers(10000));
	
?>

