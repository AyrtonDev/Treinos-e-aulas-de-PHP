<?php
$lista = [
   'Nome' => 'Tyron',
   'Idade' => '32',
   'Atributos' =>
   [
      'Força' => 60,
      'Agilidade' => 80,
      'Intelecto' => 50
   ],
   'Vida' => 1000,
   'Destreza' => 999
];

echo "NOME: ".$lista['Nome'].'<br>';
echo "FORÇA: ".$lista['Atributos']['Força'].'<br>';
echo "VIDA: ".$lista['Vida'].'<br>';