<?php
	$a = array(1, 2, 3, 4, 5, 6, 7, 8, 9);

	foreach ($a as $key){
		if ($key == 3 || $key == 6 || $key == 9){
			$c .= $key.'<br>';
		}
		else{
			$c .= $key.' ';
		}
	}
	echo $c;
?>