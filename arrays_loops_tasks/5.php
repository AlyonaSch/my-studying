<?php
	$arr = array('Коля' => 200, 'Вася' => 300, 'Петя'  => 400, );
	krsort($arr);

	foreach ($arr as $key => $value) {
		echo $key . " зарплата - " . $value . " долларов" . "<br>";
	}
?>