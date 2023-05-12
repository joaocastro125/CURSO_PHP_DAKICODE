<?php
// funcão nativa do php 


function mostrarNome(){
    return "joao";
}
echo "<br>";



$result=mostrarNome();

echo $result;

echo "<br>";
echo "<hr>";



// utilizando paramentro 

function mostrarNome2($nome){
    return $nome;
}

$result2=mostrarNome2('marcos');

echo $result2;

echo "<br>";
echo "<hr>";

// utilizando o valor padrao
function calculadora($numero=10,$numero2=20){
    echo $numero+$numero2;
}

calculadora();
echo "<hr>";
