<?php
$arr = [45, 72, 15, 34, 56];
$largest = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] > $largest) {
            $largest = $arr[$i];
        }
    }



echo "The largest number in the array is: " . $largest;

echo "<br>";
echo "Program by Diya Bhutani(2220100243)";
?>

