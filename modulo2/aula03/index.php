<?php
 // da uma pausa no servidor por segundo 
 sleep(3);
 echo "hello word";
 echo "<br>";

 $name="joao";

 if($name=="marcos"){
    echo "tudo certo";
 }else{
    // da uma pausa no servidor o die para por aqui 
    die("O script parou de fucionar");
 }