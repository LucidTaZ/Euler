<?php
	
	require_once dirname(__FILE__) . '/math.php';
	
	$maxPrimes = -1;
	$maxPrimesA = -1;
	$maxPrimesB = -1;
	
	for ($a = -999; $a <= 999; ++$a) {
		for ($b = -999; $b <= 999; ++$b) {
			$nPrimes = countQuadraticConsecutivePrimes($a, $b);
			if ($nPrimes >= $maxPrimes) {
				$maxPrimes = $nPrimes;
				$maxPrimesA = $a;
				$maxPrimesB = $b;
				
				printf('The quadratic n^2 + %d * n + %d has %d consecutive primes. a*b=%d' . "\n", $maxPrimesA, $maxPrimesB, $maxPrimes, $maxPrimesA*$maxPrimesB);
			}
		}
	}
	
	function countQuadraticConsecutivePrimes ($a, $b) {
		$nPrimes = 0;
		for ($n = 0; true; ++$n) {
			if (isPrime(abs($n*$n + $a * $n + $b))) {
				++$nPrimes;
			} else {
				return $nPrimes;
			}
		}
	}
	
?>

