<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div>
	<form class="subform" method="post">
		<h2>Введите ваше число</h2>
		<input type="text" name="number">
		<input type="submit" name="send">
		<h2>Получите результат</h2>
	</form>
	<?php

	$a = $_POST[number];
	// $b = array();

	// if (is_numeric($a)) {
	// 	$c = array_push($b, $a);
	// }

	for ($i=1; $i<=strlen($a); $i++) { 
	    $d[]=substr($a, $i, 1); 
}

	$e = array_sum($d);
	echo $e;
	
	// $number = 0;

	// foreach ($array as $key => $value) {
	// 	if (is_numeric($number)) {
	// 		# code...
	// 	} else {
	// 		# code...
	// 	}
		
	// }
	

	?>
</div>
</body>
</html>