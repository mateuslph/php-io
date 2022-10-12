<?php

$arquivo = fopen('cursos.txt', 'r');

$tamanhoDoArquivo = filesize('cursos.txt'); // faz a leitura do tamanho em bytes do arquivo
$cursos = fread($arquivo, $tamanhoDoArquivo);
echo $cursos;
fclose($arquivo);
