<?php
	$age = 23;

	if($age > 17 && $age < 59){
		echo "Вам еще работать и работать";
	}
	elseif($age > 59){
		echo "Вам пора на пенсию";
	}
	elseif($age < 18){
		echo "Вам еще рано работать";
	}
?>