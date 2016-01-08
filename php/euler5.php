#!/usr/bin/php
<?php
	
	// Count backwards and increase per 1260: answer: 232792560, time: 0.077 seconds.
	
	$i = 0;
	while (true) {
		$i += 1260;
		$failedDivisor = 0;
		if (divisibleUpTo($i, 20, $failedDivisor)) {
			print $i . "\n";
			exit(0);
		}
	}
	
	function divisibleUpTo ($x, $maxDivisor, &$failedDivisor) {
		for ($divisor = $maxDivisor; $divisor >= 2; --$divisor) {
			if (($x % $divisor) != 0) {
				$failedDivisor = $divisor;
				return false;
			}
		}
		return true;
	}
	
	/*
	// Count backwards and increase per 20: answer: 232792560, time: 4 seconds.
	
	$i = 0;
	while (true) {
		$i += 20;
		$failedDivisor = 0;
		if (divisibleUpTo($i, 20, $failedDivisor)) {
			print $i . "\n";
			exit(0);
		}
	}
	
	function divisibleUpTo ($x, $maxDivisor, &$failedDivisor) {
		for ($divisor = $maxDivisor; $divisor >= 2; --$divisor) {
			if (($x % $divisor) != 0) {
				$failedDivisor = $divisor;
				return false;
			}
		}
		return true;
	}
	*/
	
	/*
	// Count backwards and skip regions after failed divisors: answer: 232792560, time: 11 seconds.
	
	$i = 0;
	while (true) {
		++$i;
		$failedDivisor = 0;
		if (divisibleUpTo($i, 20, $failedDivisor)) {
			print $i . "\n";
			exit(0);
		} else {
			// Increase $i to skip some of the next numbers
			$i = ceil($i / $failedDivisor) * $failedDivisor - 1;
		}
	}
	
	function divisibleUpTo ($x, $maxDivisor, &$failedDivisor) {
		for ($divisor = $maxDivisor; $divisor >= 2; --$divisor) {
			if (($x % $divisor) != 0) {
				$failedDivisor = $divisor;
				return false;
			}
		}
		return true;
	}
	*/
	
	/*
	//Count backwards: answer: 232792560, time: 49 seconds.
	
	$i = 0;
	while (true) {
		++$i;
		if (divisibleUpTo($i, 20)) {
			print $i . "\n";
			exit(0);
		}
	}
	
	function divisibleUpTo ($x, $maxDivisor) {
		for ($divisor = $maxDivisor; $divisor >= 2; --$divisor) {
			if (($x % $divisor) != 0) {
				return false;
			}
		}
		return true;
	}
	*/
	
	/*
	//Naive implementation: answer: 232792560, time: 64 seconds.
	
	$i = 0;
	while (true) {
		++$i;
		if (divisibleUpTo($i, 20)) {
			print $i . "\n";
			exit(0);
		}
	}
	
	function divisibleUpTo ($x, $maxDivisor) {
		for ($divisor = 2; $divisor <= $maxDivisor; ++$divisor) {
			if (($x % $divisor) != 0) {
				return false;
			}
		}
		return true;
	}
	*/
	
?>

