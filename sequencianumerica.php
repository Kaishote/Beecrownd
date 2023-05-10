<?php
$n = readline();
$lista = [];
for ($i = 0; $i < $n; $i++) {
    $m = readline();
    $lista[] = $m;
}
$mapa = [];
sort($lista);
foreach ($lista as $i) {
    if (!array_key_exists($i, $mapa)) {
        $mapa[$i] = 1;
    } else {
        $mapa[$i]++;
    }
}
foreach ($mapa as $k => $v) {
    echo "$k aparece $v vez(es)\n";
}
