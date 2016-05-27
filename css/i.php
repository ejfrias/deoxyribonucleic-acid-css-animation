<?php

	$opaq = 7;
	$min = 1;
	$prefix = '.0';
	for( $i = 2; $i <= 35; $i++ ){
		echo '-'.$i.'px '.$i.'px 0 0 rgba(0,0,0, '.$prefix.$opaq.'), ';
		
		if( $opaq == 1 ){
			$opaq = 10;
			$prefix .= '0';
		}
		
		$opaq = $opaq - $min;
	}
