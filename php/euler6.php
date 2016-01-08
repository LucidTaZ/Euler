<?php
	
	$n = 100;
	
	$sum = $n * ($n+1) / 2;
	$sumSquared = $sum * $sum;
	
	$summedSquares = 0;
	for ($i = 1; $i <= $n; ++$i) {
		$summedSquares += $i*$i;
	}
	
	$difference = $sumSquared - $summedSquares;
	
	echo $difference . "\n";
	
?>

