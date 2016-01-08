<?php
	
	function countDivisors ($x) {
		$divisors = 0;
		$max = sqrt($x);
		for ($i = 1; $i <= $max; ++$i) {
			if (($x % $i) == 0) {
				$divisors += 2;
				//print $i . "\n";
			}
		}
		return $divisors;
	}
	
	$limit = 500;
	
	for ($i = 1; true; ++$i) {
		$x = $i * ($i+1) / 2;
		
		if (countDivisors($x) > $limit) {
			print $x . "\n";
			die;
		}
	}
	
?>
