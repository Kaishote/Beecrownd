<?php
while(true){
  $n1 = readline();
  if($n1==0){
    break;
  }
  list($q,$d,$p) = explode(" ",$n1);
  $v1 = $q*$d*$p;
  if ($q>$p){
    $v2 = $q - $p;
  }
  elseif($p>$q){
    $v2 = $p -$q;
  }
$v3 = intdiv($v1,$v2);
  if($v3==1){
    echo("{$v3} pagina\n");
  }
  else{
    echo("{$v3} paginas\n");
  }
}
