<?php
	
	ini_set('memory_limit', '1G');
	
	define('I_MAX', 1000000);
	define('N_CACHED', 1000000);
	
	// Cache for the first N_CACHED numbers:
	$lengths = new SplFixedArray(N_CACHED);
	
	for ($pos = 0; $pos < N_CACHED; ++$pos) {
		$lengths[$pos] = -1;
	}
	
	$lengths[1] = 1;
	
	// The search begins!
	
	$maxLength = -1;
	$maxLengthPos = -1;
	for ($pos = 1; $pos < I_MAX; ++$pos) {
		$posLength = findLength($pos);
		if ($posLength > $maxLength) {
			$maxLength = $posLength;
			$maxLengthPos = $pos;
		}
	}
	
	print 'Pos ' . $maxLengthPos . ' has length ' . $maxLength . '.' . "\n";
	
	function findLength ($pos) {
		global $lengths;
		
		if ($pos < N_CACHED && $lengths[$pos] != -1) {
			return $lengths[$pos];
		}
		
		if (($pos % 2) == 0) {
			$nextPos = $pos / 2;
		} else {
			$nextPos = 3 * $pos + 1;
		}
		
		$nextPosLength = findLength($nextPos);
		
		if ($pos < N_CACHED && $lengths[$pos] == -1) {
			$lengths[$pos] = $nextPosLength + 1;
		}
		
		return $nextPosLength + 1;
	}
	
?>

