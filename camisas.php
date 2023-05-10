<?php
$cont = 0;

while (true) {
    $n = intval(fgets(STDIN));
    if ($n == 0) {
        break;
    }
    if ($cont != 0) {
        echo "\n";
    }

    $camisas_v_p = array();
    $camisas_v_m = array();
    $camisas_v_g = array();
    $camisas_b_p = array();
    $camisas_b_m = array();
    $camisas_b_g = array();
    $name = array();

    for ($i = 0; $i < $n; $i++) {
        $name = trim(fgets(STDIN));
        $input = explode(" ", trim(fgets(STDIN)));
        $cor = $input[0];
        $tamanho = $input[1];
        $camisa = array($cor, $name, $tamanho);

        if ($cor == "branco" && $tamanho == "P") {
            $camisas_b_p[] = $camisa;
        } elseif ($cor == "branco" && $tamanho == "M") {
            $camisas_b_m[] = $camisa;
        } elseif ($cor == "branco" && $tamanho == "G") {
            $camisas_b_g[] = $camisa;
        } elseif ($cor == "vermelho" && $tamanho == "P") {
            $camisas_v_p[] = $camisa;
        } elseif ($cor == "vermelho" && $tamanho == "M") {
            $camisas_v_m[] = $camisa;
        } else {
            $camisas_v_g[] = $camisa;
        }
    }

    sort($camisas_b_p);
    sort($camisas_b_m);
    sort($camisas_b_g);
    sort($camisas_v_p);
    sort($camisas_v_m);
    sort($camisas_v_g);

    foreach ($camisas_b_p as $camisa) {
        echo "{$camisa[0]} {$camisa[2]} {$camisa[1]}\n";
    }
    foreach ($camisas_b_m as $camisa) {
        echo "{$camisa[0]} {$camisa[2]} {$camisa[1]}\n";
    }
    foreach ($camisas_b_g as $camisa) {
        echo "{$camisa[0]} {$camisa[2]} {$camisa[1]}\n";
    }

    foreach ($camisas_v_p as $camisa) {
        echo "{$camisa[0]} {$camisa[2]} {$camisa[1]}\n";
    }
    foreach ($camisas_v_m as $camisa) {
        echo "{$camisa[0]} {$camisa[2]} {$camisa[1]}\n";
    }
    foreach ($camisas_v_g as $camisa) {
        echo "{$camisa[0]} {$camisa[2]} {$camisa[1]}\n";
    }

    $cont++;
}
?>
