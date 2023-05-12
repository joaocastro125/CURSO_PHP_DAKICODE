<?php
 // manipulacao de array

$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_merge($a1,$a2));

echo "<br>";
//Retorna um array associativo contendo todos os valores de array que estão presentes em todos os argumentos.
$array1 = array('azul'  => 1, 'vermelho' => 2, 'verde'   => 3, 'roxo'  => 4);
$array2 = array('verde' => 5, 'azul'     => 6, 'amarelo' => 7, 'ciano' => 8);

var_dump(array_intersect_key($array1, $array2));