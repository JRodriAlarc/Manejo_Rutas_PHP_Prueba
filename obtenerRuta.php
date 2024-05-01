<?php

// Obtén la URL solicitada
$uri = $_SERVER['REQUEST_URI'];

// Elimina cualquier parte de la URL después del ? (cadena de consulta)
$uri = explode('?', $uri)[0];

// Divide la URL en segmentos
$uriParts = explode('/', $uri);

// Elimina el primer segmento que generalmente es el nombre del archivo (index.php)
array_shift($uriParts);

print_r($uri);