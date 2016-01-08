<?php
	
	function nRoutesGridPoints ($width, $height) {
		if ($width == 1 || $height == 1) {
			return 1;
		}
		
		static $memoization = array();
		
		if (array_key_exists($width . 'x' . $height, $memoization)) {
			return $memoization[$width . 'x' . $height];
		}
		
		$nRoutes = nRoutesGridPoints($width - 1, $height) + nRoutesGridPoints($height - 1, $width);
		
		$memoization[$width . 'x' . $height] = $nRoutes;
		
		return $nRoutes;
	}
	
	function nRoutesGridBlocks ($width, $height) {
		return nRoutesGridPoints($width + 1, $height + 1);
	}
	
	print nRoutesGridBlocks(20, 20) . "\n";
	
?>

