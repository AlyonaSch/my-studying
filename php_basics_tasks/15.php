<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculator</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			line-height: 30px;
		}
		.subform{
			background-color: #cccccc;
			width: 220px;
			margin-left: 15px;
			border-radius: 7px;
			padding-left: 30px;
			border: 3px solid gray;
			padding-bottom: 20px;
		}
		.button{
			background-color: #ccc;
			width: 30px;
			padding: 3px;
			border-radius: 5px;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.9);
			text-align: center;
			float: left;
			line-height: 25px;
			margin-left: 6px;
		}
		.clear{
			clear: both;
		}
		input[type="submit"]{
			padding: 6px;
			border-radius: 5px;
			margin-top: 5px;
			box-shadow: 1px 1px 5px rgba(0,0,0,0.9);
			text-align: center;
			margin-left: 6px;
		}
		h2{
			width: 180px;
			text-align: center;
			background-color: gray;
			margin-top: 8px;
		}
	</style>
</head>
<body>
<form class="subform" method="post">
	<h2>Calculator</h2>
	<p>
		<label for="num1">Number 1:</label><br>
		<input type="text" name="Number1">
	</p>
	<p>
		<label for="operator">Choose an action:</label><br>
		<div class="button">
			<input type="radio" name="operation" value="+"><span>  +</span>
		</div>
		<div class="button">
			<input type="radio" name="operation" value="-"><span>  -</span>
		</div>
		<div class="button">
			<input type="radio" name="operation" value="*"><span>  *</span>
		</div>
		<div class="button">
			<input type="radio" name="operation" value="/"><span>  /</span>
		</div>
		<div class="clear"></div>
	</p>
	<p>
		<label for="num2">Number 2:</label><br>
		<input type="text" name="Number2">
	</p>
	<p>
		<input type="submit" name="result" value="Count!">
	</p>
	<?php
	$a = $_POST[Number1];
	$b = $_POST[Number2];
	$radio = $_POST[operation];

	if($_POST["result"]){
		if ($radio=="+"){
			$c = $a + $b; echo "<b>Result =" . $c . "</b>";
		}
		if ($radio=="-"){
			$d = $a - $b; echo "<b>Result = " . $d . "</b>";
		}
		if ($radio=="*"){
			$e = $a * $b; echo "<b>Result = " . $e . "</b>";
		}
		if ($radio=="/"){
			if($b == 0){
				echo "<b>you can't do that... it is 0</b>";
			}
			else{
				$f = $a / $b; echo "<b>Result = " . $f . "</b>";
			}
		}
	}
?>
</form>

</body>
</html>