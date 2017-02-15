<?php
	for ($i = 1; $i <= 9; $i++)
	{
		for ($j = 0; $j < $i; $j++)
		{
			$a .= $i;
		}
		echo $a.'<br>';
		$a = '';
		$j = 0;
	}
?>