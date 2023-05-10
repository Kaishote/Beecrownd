<?php
$n = readline();
$vencedores = array();

for ($i = 0; $i < $n; $i++) {
    $jog1 = readline();
    $jog2 = readline();

    $time1 = ($jog1[0]) + ($jog2[4]);
    $time2 = ($jog1[4]) + ($jog2[0]);

    if ($time1 > $time2) {
        array_push($vencedores, "Time 1");
    } elseif ($time2 > $time1) {
        array_push($vencedores, "Time 2");
    } else {
        if (($jog2[4]) > ($jog1[4])) {
            array_push($vencedores, "Time 1");
        } elseif (($jog1[4]) > ($jog2[4])) {
            array_push($vencedores, "Time 2");
        } else {
            array_push($vencedores, "Penaltis");
        }
    }
}

for ($i = 0; $i < $n; $i++) {
    echo $vencedores[$i] . "\n";
}
?>
