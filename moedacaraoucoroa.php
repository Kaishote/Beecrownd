<?php
$v1 = [];
while (true) {
    $jogadas = readline();
    if ($jogadas == 0) {
        break;
    }
    $moedas = explode(" ", readline());
    $caroa = ["j" => 0, "m" => 0];    
  
    for ($i = 0; $i < $jogadas; $i++) {
        if ($moedas[$i] == "0") {
            $caroa["m"] += 1;
        } elseif ($moedas[$i] == "1") {
            $caroa["j"] += 1;
        }
    }
    $v1[] = $caroa;
}
foreach ($v1 as $i) {
    echo "Ryan won {$i["m"]} times and Michael won {$i["j"]} times\n";
}
?>
