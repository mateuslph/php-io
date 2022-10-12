<?php

$arquivo = fopen('cursos-escritos.txt', 'w');  // 'w' faz a leitura eh igual a writer, tambem tem outras opcoes como 'r'

$cursos = 'Olá, pessoal! Sem enrolação, vamos direto ao ponto.';
fwrite($arquivo, $cursos);  // na segunda variavel tambem pode colocar o numero de caracteres a serem gravados
fclose($arquivo);