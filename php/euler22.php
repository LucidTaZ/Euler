<?php
	
	$namesList = implode('', file(__DIR__ . '/data/p022_names.txt'));
	
	$names = explode(',', $namesList);
	foreach ($names as $k => $v) {
		$names[$k] = trim($v, '"');
	}
	
	sort($names);
	
	$n = count($names);
	$totalScore = 0;
	for ($i = 0; $i < $n; ++$i) {
		$thisNameScore = nameScore($names[$i]) * ($i+1);
		$totalScore += $thisNameScore;
	}
	
	echo $totalScore . "\n";
	
	function nameScore ($name) {
		$score = 0;
		$n = strlen($name);
		for ($i = 0; $i < $n; ++$i) {
			$score += ord(substr($name, $i, 1)) - ord('A') + 1;
		}
		return $score;
	}
	
?>

