<?php

$arquivo = fopen('cursos.txt', 'r');  // 'r' faz a leitura eh igual a read, tambem tem outras opcoes como 'w'

$tamanhoDoArquivo = filesize('cursos.txt'); // faz a leitura do tamanho em bytes do arquivo
$cursos = fread($arquivo, $tamanhoDoArquivo); // limite de leitura neste modelo eh de 128MB
echo $cursos;
fclose($arquivo);
