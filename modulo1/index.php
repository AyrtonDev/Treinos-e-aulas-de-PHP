<?php 
echo 'Olá, Mundo! '; #para  impremir mensagem no navegador

# Variavel
$nome = 'Victor'; # String
$numero = 30; # Number
$decimal = 2.5; # Float
$boolen = true; # Boolean
$nada = null; # Null

# Mesclar variaveis

$nome = 'Ayrton';
$sobrenome = 'Guerra';
$idade = 50;

$nomeCompleto = $nome.' '.$sobrenome.' '; # metodo 1 - se envolver com aspas simples, vai entender que tudo é string
$frase = "$nome $sobrenome tem $idade anos."; # metodo 2 - se envolver com aspas duplas, vai verificar se tem variavel
echo $nomeCompleto;
echo "<br> $frase <br>";
# Exemplo com numeros
$n1 = 10;
$n2 = 5;
$total = $n1 + $n2;
echo $n1.$n2;
echo "<br> $total <br>";

# Arrays

$bolo1 = [
   'açucar', 
   'farinha de trigo', 
   'ovo', 
   'leite', 
   'fermento em pó'
];

$numerosDaMegaSena = [12, 53, 21, 04, 32];

echo $bolo1[0];
echo "<br> $numerosDaMegaSena[0] $numerosDaMegaSena[2] $numerosDaMegaSena[4]<br>";

# Spread Operator PHP 7.4

$bolo2 = [...$bolo1,'corante','manteiga'];

echo $bolo2[6]."<br>";

# Exemplo 2

$pessoas1 = ['Patrick', 'Tooru', 'Jorge'];
$pessoas2 = ['Gabriel', 'Fernanda', 'Fabricio'];
$lista = [...$pessoas1, ...$pessoas2];

print_r($lista);