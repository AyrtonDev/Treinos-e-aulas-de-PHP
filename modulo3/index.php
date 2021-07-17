<?php
# Functions

function subsequente () {
   for($q=1; $q<11; $q++){
      echo $q.'<br>';
   }
   echo '<hr>';
}

subsequente();

// Exemplo

function latir () {
   echo 'au au<br>';
}

for($q=1; $q<11; $q++){
   latir();
}
echo '<br><hr>';

# parametros para Functions

function somar ($a, $b){
   echo $a + $b;
}
somar(10, 20);
echo '<br><hr>';

// Exemplo
$n1 = 7;
$n2 = 2;

function sub ($a, $b){
   return $a - $b;
}
echo "$n1 menos $n2 é igual a ".sub($n1, $n2);
echo '<br><hr>';

// Exemplo 2
function multi ($a, $b){
   return $a * $b;
}
$total = multi($n1, $n2);
echo "A multiplicação entre $n1 vezes $n2 é igual a $total";
echo '<br>';
somar(sub($n1, $n2), $total);  // brincadeira
echo '<br><hr>';

# Parametros com type e valor default


function somar1(int $a, int $b=2, int $c=3){
   return $a + $b + $c;
}

echo somar1(10);
echo '<br><hr>';
echo somar1(10, 10);
echo '<br><hr>';
echo somar1(10, 10, 10);
echo '<br><hr>';

# parametro com referencia ou valor

function somar2 ($n1, $n2, &$total){
   $total = $n1 + $n2;
}

$x = 3;
$y = 4;
$soma = 0;
somar2($x, $y, $soma);
echo 'Total: '.$soma;
echo '<br><hr>';

$numeros = [3, 23, 12];
sort($numeros);
print_r($numeros);
echo '<br><hr>';

# função anonima

$dizimo = function(int $n1){
   return $n1 * 0.1;
};

echo $dizimo(10);
echo '<br><hr>';

# Arrow Function PHP 7.4

$porce = fn($n1, $n2) => $n2 * $n1 / 100;

echo $porce(10, 100);