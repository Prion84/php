<?php 
$x=9999; 
$i=1; 
echo 'Define Kaprekar Constant'; 
echo $x.'<br>'; 

while ($x!==6174&&$i<16) 

{ 
$x1=floor($x/100); 
$x2=$x%100; 
$x11=floor($x1/10); 
$x12=$x1%10; 
$x21=floor($x2/10); 
$x22=$x2%10; 
$y00=array($x11,$x12,$x21,$x22); 
sort($y00); 
$y=$y00[0].$y00[1].$y00[2].$y00[3]; 
$z=$y00[3].$y00[2].$y00[1].$y00[0]; 
if (($x1)==($x2)) {echo 'change number<br>'; 

break;} 
if ($y>$z) 
{$r=$y-$z; 
echo $y.'-'.$z.'='.$r.'<br>';} 
else {$r=$z-$y; 
echo $z.'-'.$y.'='.$r.'<br>';} 

$x=$r; 
$i++; 
}
