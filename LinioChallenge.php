<?php

	$a = array();

	for($i=1; $i<=100; $i++){
	    $a[$i] = $i;
	}

	for($i=3; $i<=100; $i=$i+3){
	    $a[$i] = 'Linio';
	}

	for($i=5; $i<=100; $i=$i+5){
	    if (!($i%15)) {
	        $a[$i] = 'Linianos';
	        continue;
	    }
	    $a[$i] = 'IT';
	}

	for($i=1; $i<=100; $i++){
	    print_r($a[$i].' ');
	}
?>