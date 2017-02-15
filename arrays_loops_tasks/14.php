<?php
	$a = array(4, 2, 5, 19, 13, 0, 10);
	foreach ($a as $key => $value) {
		if($value == 2 || $value == 3 || $value == 4){
			echo "yes";
			break;
		}
		else{
			echo "no";
		}
	}

?>