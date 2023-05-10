<?php
$n1 = intval(fgets(STDIN));
$tabu = array();
for ($i=0;$i<$n1;$i++){
    $tabu[] = intval(fgets(STDIN));
}
for ($i=0;$i <$n1;$i++){
    $minas = $tabu[$i];
    if ($i>0){
        $minas += $tabu[$i-1];
    }
    if ($i < $n1 -1){
        $minas += $tabu[$i+1];
    }
    echo"$minas\n";
}
