<?php
	
	for ($c = 997; $c > 2; --$c) {
		for ($b = $c - 1; $b > 1; --$b) {
			for ($a = $b - 1; $a > 0; --$a) {
				if ($a+$b+$c == 1000 && $a*$a + $b*$b == $c*$c) {
					echo 'a=' . $a . "\n";
					echo 'b=' . $b . "\n";
					echo 'c=' . $c . "\n";
					exit;
				}
			}
		}
	}
	
?>

