<?php
	$arr = array('green' => 'зеленый', 'red'=>'красный','blue'=>'голубой' );
	asort($arr);
	foreach ($arr as $key => $value) {
		echo $value . "<br>";
	}
	
?>