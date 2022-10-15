<?php

$novoCurso = trim(fgets(STDIN));  // STDIN standard input

file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);  // FILE_APPEND mantem o que ja estava escrito
