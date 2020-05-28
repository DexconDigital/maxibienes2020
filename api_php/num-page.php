<?php

$paths = explode("?", $_SERVER['REQUEST_URI']);
$basepath = $paths[0];
$paginaActual = 1;
$values =  explode('/', $basepath);
$isCampusSouth = false;

if (strpos($basepath, 'pagina')) {
    $paginaActual = $values[count($values) - 1];
}

foreach ($values as $posicion => $value) {
    if ($value === "sur") {
        $isCampusSouth = true;
    }
}
