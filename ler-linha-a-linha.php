<?php

$arquivo = fopen('cursos.txt', 'r');

while (!feof($arquivo)) { // funcao que le o arquivo linha a linha eh usado para ler arquivos com mais de 128MB
    $curso = fgets($arquivo);

    echo $curso;
}

fclose($arquivo);
