<?php
# Condicional IF ELSE
$idade = 16;

if($idade < 18){
   echo 'Menor de idade <br>';
} else {
   echo 'Maior de idade <br>';
}

# Condicional Ternário

echo ($idade < 18) ? 'Menor de idade<br>' : 'Maior de idade<br>';

// exemplo
$idade2 = 22;
$validador = ($idade2 > 18) ? true : false;
if ($validador){
   echo 'Maior idade<br>';
} else {
   echo 'Menor idade<br>';
}

# Condicional NULL CAO PHP 7.4
$nome =  'Junior';

$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ''; # Metodo 1
$nomeCompleto .= $sobrenome ?? ' Cadorso<br>'; # Metodo 2

echo $nomeCompleto;

# Switch

$tipo = 'texto';

switch($tipo) {
   case 'foto':
      echo 'exibindo FOTO<br>';
      break;
   case 'video':
      echo 'exibindo VIDEO<br>';
      break;
   case 'texto':
      echo 'exibindo TEXTO<br>';
      break;
}

# Loop While

$numero = 0;

while($numero < 11){
   echo "N. ".$numero."<br>";
   $numero++;
}

# Loop For

for($c = 0; $c < 11; $c++){
   echo "N. ".$c." - ";
}
echo '<br>';

# Loop ForEach

echo '<ul>';
$pessoas1 = ['Patrick', 'Tooru', 'Jorge'];

foreach($pessoas1 as $index => $valor) {
   echo "<li>Nome ".($index + 1).": $valor</li>";
}
echo '</ul>';