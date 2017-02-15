<?php
	$a = array(0 => 'Su', 1 => 'Mo', 2 =>  'Tu', 3 => 'We', 4 => 'Th', 5 => 'Fr', 6 => 'Sa');
	$day = 1; 

	foreach ($a as $key => $value) {
		if ($key == $day) {
			echo "<i>" . $value . "</i> ";
		}
		else {
			echo $value . " ";
		}
	}
?>