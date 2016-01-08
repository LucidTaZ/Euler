<?php
	
	function collatz ($pos) {
		print $pos . "\n";
		if ($pos == 1) {
			exit(0);
		} else if (($pos % 2) == 0) {
			collatz($pos / 2);
		} else {
			collatz(3 * $pos + 1);
		}
	}
	
	collatz(837799);
	
?>

