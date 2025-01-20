
<?php

$terms = 10;

$first = 0;
$second = 1;

echo "Fibonacci Series up to " . $terms . " terms: ";

echo $first . ", " . $second;

for ($i = 3; $i <= $terms; $i++) {
    $next = $first + $second;
    
    
    echo ", " . $next;
    
    
    $first = $second;
    $second = $next;
}

echo "<br>";
echo "Program by Diya Bhutani(2220100243)";
?>