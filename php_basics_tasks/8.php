<?php

// not done 


	$age = 23;
	$age = true;

	if($age > 17 && $age < 59){
		echo "Вам еще работать и работать";
	}
	elseif($age > 59){
		echo "Вам пора на пенсию";
	}
	elseif($age < 18){
		echo "Вам еще рано работать";
	}
	elseif(isset($age) || $age < 0){
		echo "Неизвестный возраст";
	}
	
?>