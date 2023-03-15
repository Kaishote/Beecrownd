//-------The Greatest----------//

<?php

$valores = explode(" ", fgets(STDIN));

    $maiorAB = ($valores[0] + $valores[1] + abs($valores[0] - $valores[1])) / 2;
    $maior = ($maiorAB + $valores[2] + abs($maiorAB - $valores[2])) / 2;
    
    echo "$maior eh o maior\n";
?>

//-------------Banknotes---------------//

$valor = readline();

$x = $valor;
$contador100 = 0;
$contador50 = 0;
$contador20 = 0;
$contador10 = 0;
$contador5 = 0;
$contador2 = 0;
$contador1 = 0;

while ($valor > 0) {
  if ($valor >= 100) {
    $valor -= 100;
    $contador100++;
  }else if ($valor >= 50){
    $valor -= 50;
    $contador50++;
  }else if ($valor >= 20){
    $valor -= 20;
    $contador20++;
  }else if ($valor >= 10){
    $valor -= 10;
    $contador10++;
  }else if ($valor >= 5){
    $valor -= 5;
    $contador5++;
  }else if ($valor >= 2){
    $valor -= 2;
    $contador2++;
  }else if ($valor >= 1){
    $valor -= 1;
    $contador1++;
  }
}
  echo "$x\n";
  echo "$contador100 nota(s) de R$ 100,00\n";
  echo "$contador50 nota(s) de R$ 50,00\n";
  echo "$contador20 nota(s) de R$ 20,00\n";
  echo "$contador10 nota(s) de R$ 10,00\n";
  echo "$contador5 nota(s) de R$ 5,00\n";
  echo "$contador2 nota(s) de R$ 2,00\n";
  echo "$contador1 nota(s) de R$ 1,00\n";

//-------------Rest of a Division---------------//

$x = intval(readline("Digite o valor de X: "));
$y = intval(readline("Digite o valor de Y: "));

if ($x > $y) {
  list($x, $y) = array($y, $x);
}

for ($i = $x + 1; $i < $y; $i++) {
  $resto = $i % 5;
  if ($resto == 2 || $resto == 3) {
    echo "{$i}\n";
  }
}
                          
//-----------------Sequence of Numbers and Sum-----------------//
                          
while (true) {
  $m = readline();
  $m = explode(" ",$m);
  $soma = 0;
  if($m[0]>$m[1]){
    $maior = $m[0];
    $menor = $m[1];
  }
  else{
    $maior = $m[1];
    $menor = $m[0];
  }
  if ($menor > 0) {
  for ($menor;$menor <= $maior;$menor++){
    $soma += $menor;
    echo"$menor ";
  }
  echo"Sum=$soma\n";
  }else {
    break;
  }
}
                                        
//----------------The Race of Slugs------------------//
                                        
$ndelesmas = readline();
$vdaslesmas = readline();
$vdaslesmas = explode(" ", $vdaslesmas);
$maior = 0;

foreach($vdaslesmas as $v) {
  if ($maior < $v) {
    $maior = $v;
  }
}

if ($maior >= 20) {
  echo "3";
}else if ($maior >= 10 and $maior < 20) {
  echo "2";
}else {
  echo "1";
}
                                       
//----------------Sum of Consecutive Odd Numbers ------------------//
                                       
<?php
$x = readline();
$y = readline();
$soma = 0;
if ($x == $y){
  echo"0";
}
else if ($x > $y){
  $maior = $x;
  $menor = $y;
}
else{
  $maior = $y;
  $menor = $x;
}
$menor+=1;
while ($menor < $maior){
  if($menor %2 != 0){
    $soma+=$menor;
  }
  $menor+=1;
}
echo"$soma";;
                                       
//--------------Alarm Clock--------------------//
                                       
  $horas = readline();
  $horas = explode(" ", $horas);

  $h1 = $horas[0];
  $m1 = $horas[1];
  $h2 = $horas[2];
  $m2 = $horas[3];

  $inicio = 0;
  $fim = 0;

  if ($m1+$m2+$h1+$h2 == 0){
    exit;
  }
  if ($h1 == 0){
    $inicio = (24*60)+$m1;
  }else {
    $inicio = ($h1*60)+$m1;
  }

  if ($h2 == 0) {
    $fim = (24*60)+$m2;
  }else {
    $fim = ($h2*60)+$m2;
  }
  if ($fim>$inicio) {
    echo $fim - $inicio;
  }else {
    echo ((24*60)-($inicio-$fim));
  }
                                       
//----------------Even and Odd------------------//
// Lê o número de valores a serem lidos
                                       
$n = intval(fgets(STDIN));

// Lê e armazena os valores
$valores = array();
for ($i = 0; $i < $n; $i++) {
    $valores[] = intval(fgets(STDIN));
}

// Ordena os valores
sort($valores);

// Separa os valores pares e ímpares
$pares = array();
$impares = array();
foreach ($valores as $valor) {
    if ($valor % 2 == 0) {
        $pares[] = $valor;
    } else {
        $impares[] = $valor;
    }
}

// Ordena os pares em ordem crescente e os ímpares em ordem decrescente
rsort($impares);
sort($pares);

// Imprime os valores na ordem especificada
foreach ($pares as $par) {
    echo $par . "\n";
}
foreach ($impares as $impar) {
    echo $impar . "\n";
} 
