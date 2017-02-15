<?php
	$a = array(0 => 'Su', 1 => 'Mo', 2 =>  'Tu', 3 => 'We', 4 => 'Th', 5 => 'Fr', 6 => 'Sa');
	$b = 0;
	$c = 6;

	foreach ($a as $key => $value) {
		if ($key == $b) {
			echo "<b>". $value . "</b>" . " ";
		}
		elseif ($key == $c) {
			echo "<b>". $value . "</b>" . " ";
		}
		else{
			echo $value . " ";
		}
	}
?>