<form action="<?php $_SERVER['PHP_SELF']?>" method="post" enctype="multipart/form-data">	
	Input Number: <input type="text" name="number" /><br />
	<input type="submit" value="Submit" />
</form>
 <?php
if (isset($_POST['number'])) {
 $x=$_POST['number'];
$i=1; 
echo 'Define Kaprekar Constant<br>'; 
echo $x.'<br>'; 
while ($x!==6174&&$i<16) 
{ $x=(string)$x;
  if(strlen($x)==3) {$x='0'.$x;}
 /*echo $x.'<br>';*/
$y00=str_split($x);
sort($y00);
$y=implode($y00);	
rsort($y00);	
$z=implode($y00);
 
 if (($x[0]==$x[1])&&($x[2]==$x[3])&&($x[0]==$x[2])&&($x[1]==$x[3])) 
{echo 'change number<br>'; 
break;} 
if ($y>$z) 
{$r=$y-$z; 
echo $y.'-'.$z.'='.$r.'<br>';} 
else {$r=$z-$y; 
echo $z.'-'.$y.'='.$r.'<br>';} 
$x=$r; 
$i++; 
echo '------<br>';
}
}

?>
