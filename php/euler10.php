<?php
	
	require_once dirname(__FILE__) . '/math.php';
	
	$x = 1;
	$max = 2000000;
	$sum = 0;
	while (true) {
		$x = nextPrime($x);
		if ($x >= $max) {
			break;
		}
		$sum += $x;
	}
	printf('The sum of the primes below %d is: %d.' . "\n", $max, $sum);
	
	
/*
	// Sieve method, not efficient for large primes
	
	ini_set('memory_limit', '1G');
	
	$max = 120;
	$sieve = array();
	for ($i = 2; $i < $max; ++$i) {
		$sieve[$i] = 1; // Everything is still a candidate prime
	}
	
	$x = 1;
	$sum = 0;
	while (true) {
		$x = nextPrimeSieve($x, $sieve);
		if ($x == -1) {
			break;
		}
		$sum += $x;
	}
	printf('The sum of the primes below %d is: %d.' . "\n", $max, $sum);
*/	
?>
