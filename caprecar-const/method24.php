
<form action="<?php
$_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">	
	Input Number: <input type="text" name="number" /><br />
	<input type="submit" value="Submit" />
</form>
 <?php

if (isset($_POST['number']))
	{ //don't count if number isn't define in form
	$x = $_POST['number'];
	$i = 1;
	echo 'Define Kaprekar Constant<br />';
	echo $x . '<br />';
	while ($x !== 6174 && $i < 10) //Count until x=6174 or i<10
		{
		$x = (string)$x; //Set type String for variable x
		if (strlen($x) == 3)
			{
			$x = '0' . $x;
			} // add 0 for 3-digitals number
		$y00 = str_split($x); // Split String in array
		sort($y00); // Sort Array for largest number
		$y = implode($y00); //Combine Array in one String/Number
		rsort($y00); //Reverse sort  array for smallest Number
		$z = implode($y00); //Combine Array in one String/Number
		if (($x[0] . $x[1]) == ($x[2] . $x[3])) //check Number with same digits
			{
			echo 'change number<br />';
			break;
			}

		if ($y > $z)
			{
			$r = $y - $z;
			echo $y . '-' . $z . '=' . $result . '<br />';
			}
		  else
			{
			$r = $z - $y;
			echo $z . '-' . $y . '=' . $result . '<br />';
			}

		$x = $result;
		$i++;
		echo '------<br />';
		}
	}

?>

