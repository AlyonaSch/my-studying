<?php
	$a = array('Январь', 'Февраль', 'Март', 'Апрель', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь');
	$month = 1;

	foreach ($a as $key => $value) {
		if ($key == $month) {
			echo '<b>' . $value . '</b>' . " ";
		}
		else{
			echo $value . " ";
		}
	}
?>