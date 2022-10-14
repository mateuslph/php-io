<?php

$cursos = fopen('cursos.txt', 'r');

stream_filter_append($cursos, 'string.toupper');  // atraves do comando var_dump(stream_get_filters), obtem-se
// alguns filtros pre-definidos. Eh possivel criar filtros. 

echo fread($cursos, filesize('cursos.txt'));

fclose($cursos);
