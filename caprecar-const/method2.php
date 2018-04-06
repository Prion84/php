<?php 
$x=9897; 
$i=1; 
echo 'Define Kaprekar Constant<br>'; 
echo $x.'<br>'; 
//$x=(string)$x;
while ($x!==6174&&$i<16) 
{ 
$x=(string)$x;	
$y00=array($x[0],$x[1],$x[2],$x[3]);
sort($y00);
$y=$y00[0].$y00[1].$y00[2].$y00[3]; 
$z=$y00[3].$y00[2].$y00[1].$y00[0]; 
if (($x[0].$x[1])==($x[2].$x[3])) {echo 'change number<br>'; 
break;} 
if ($y>$z) 
{$r=$y-$z; 
echo $y.'-'.$z.'='.$r.'<br>';} 
else {$r=$z-$y; 
echo $z.'-'.$y.'='.$r.'<br>';} 
$x=$r; 
$i++; 
}
?>
