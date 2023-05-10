<?php
list($a, $b, $c) = explode(" ", readline());
$a = floatval($a);
$b = floatval($b);
$c = floatval($c);
$d = $b * $b - 4 * $a * $c;
if ($d < 1 or $a == 0) {
    echo "Impossivel calcular\n";
} else {
    $x1 = (-$b + sqrt($d)) / (2 * $a);
    $x2 = (-$b - sqrt($d)) / (2 * $a);
    echo"R1 = %.5f\n ",$x1;
    echo"R2 = %.5f\n ",$x2;
}
