<?php


$num1 = 36;
$num2 = 60;

$smaller = ($num1 < $num2) ? $num1 : $num2;


for ($i = $smaller; $i >= 1; $i--) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i; 
        break; 
    }
}

echo "The HCF of " . $num1 . " and " . $num2 . " is: " . $hcf;
echo "<br>";
echo "Program by Diya Bhutani(2220100243)";
?>
