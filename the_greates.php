<?php
$v1 = readline();
$v1 = explode(" ", $v1);
$maior = -99999999;
for ($x = 0; $x <= count($v1);$x++){
  if ($maior < $v1[$x]){
    $maior = $v1[$x];
  }
}
echo "$maior eh o maior\n";
?>
