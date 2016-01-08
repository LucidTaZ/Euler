<?php
	
	function isDivisible ($x, $y) {
		return ($x % $y) == 0;
	}
	
	function isPrime ($x) {
		if ($x > 2 && isDivisible($x, 2)) {
			return false;
		}
		
		$max = sqrt($x);
		for ($i = 3; $i <= $max; $i += 2) {
			if (isDivisible($x, $i)) {
				return false;
			}
		}
		
		return true;
	}
	
	function nextPrime ($x) {
		// Precondition: $x is prime or 1. (Handy for initialization of an iterator.)
		if ($x == 1) {
			return 2;
		}
		
		if (isDivisible($x, 2)) {
			--$x;
		}
		
		do {
			$x += 2;
		} while (!isPrime($x));
		
		return $x;
	}
	
	function nextPrimeSieve ($x, array &$sieve) {
		$n = count($sieve);
		for ($i = $x+1; $i < $n; ++$i) {
			if ($sieve[$i] == 1) {
				// Result found!
				
				// Mark all composites > $i
				$substitutions = 0;
				for ($j = 2*$i; $j < $n; $j += $i) {
					if ($sieve[$j] == 1) {
						++$substitutions;
					}
					$sieve[$j] = 0;
				}
				var_dump($substitutions);
				
				return $i;
			}
		}
		return -1; // Sieve completed
	}
	
?>
