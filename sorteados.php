<?php
$sorteados = explode(" ", readline());
$apostados = explode(" ", readline());
$acertados = 0;

foreach ($sorteados as $i) {
    if (in_array($i, $apostados)) {
        $acertados++;
    }
}

if ($acertados == 3) {
    echo "terno\n";
} elseif ($acertados == 4) {
    echo "quadra\n";
} elseif ($acertados == 5) {
    echo "quina\n";
} elseif ($acertados == 6) {
    echo "sena\n";
} else {
    echo "azar\n";
