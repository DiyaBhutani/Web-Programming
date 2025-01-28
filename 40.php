<?php
$num=1567;
$original = $num;
$totalDigits = 0;
while($num!= 0)
{
$num = round($num/10);
$totalDigits ++;
}
echo "Total no.of digits in the given number $original is " .$totalDigits;

echo "<br>";
echo "Program by Diya Bhutani(2220100243)";

?>