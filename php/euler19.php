<?php
	
	$nSundays = 0;
	for ($y = 1901; $y <= 2000; ++$y) {
		for ($m = 1; $m <= 12; ++$m) {
			if (date('w', mktime(12, 0, 0, $m, 1, $y)) === '0') {
				++$nSundays;
			}
		}
	}
	printf('Number of Sundays: %d.' . "\n", $nSundays);
	
?>

