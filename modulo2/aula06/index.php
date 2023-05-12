<?php

// manipulacao de string

$conteudo='Lorem Ipsum é simplesmente um texto fictício da indústria tipográfica e de impressão. Lorem Ipsum tem sido o texto fictício padrão da indústria desde os anos 1500, quando um impressor desconhecido pegou uma galera de tipos e os embaralhou para fazer um livro de espécimes de tipos. Ele sobreviveu não apenas a cinco séculos, mas também ao salto para a composição eletrônica, permanecendo essencialmente inalterado. Foi popularizado na década de 1960 com o lançamento de folhas Letraset contendo passagens de Lorem Ipsum e, mais recentemente, com software de editoração eletrônica como Aldus PageMaker, incluindo versões de Lorem Ipsum.';
// recortando string
echo substr($conteudo,0,20);

// Retorna uma matriz de strings, cada uma como substring de string formada pela divisão dela a partir do delimiter.

/*

   $nome="joao emanoel de souza";

    $nomes= explode(' ',$nome);

    print_r($nomes);

*/



    $nome="joao emanoel de souza";
    $nomes= explode(' ',$nome);

    $nomes= implode(' ',$nomes);

    echo $nomes;    

    $conteudo="<h1> João</h1>outra informação";

    // remove todo tipo de tag do html
    echo strip_tags($conteudo);