<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1"><tr>
	<?php
		for ($i=1;$i<=9;$i++) {
			echo "<td>";
		 for ($z=1;$z<=9;$z++) {
				echo $i.'*'.$z.'='.($i*$z).'<br>'; }
				echo "</td>";
		}
	?>
</tr></table>
</body>
</html>