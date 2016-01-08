<?php
	
	$a = array('1', '1');
	$i = 0;
	$n = 2;
	
	while (strlen($a[$i]) < 1000) {
		$i = 1 - $i;
		$a[$i] = bcadd($a[0], $a[1]);
		++$n;
	}
	
	var_dump($n);
	
?>

