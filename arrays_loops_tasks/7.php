<?php
	$a = array(2, 5, 9, 15, 0, 4);
	foreach ($a as $key){
		if($key > 3 && $key < 10){
			echo $key . "<br>";
		}
	}
?>