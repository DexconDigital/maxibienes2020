<?php

header('Access-Control-Allow-Origin: *'); 

require_once("bd_function.php");

$link = Conect();
$array = array();

    $sql = "SELECT * FROM noticias";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $descripcion = $field['descripcion'];
        $imagen = $field['imagen'];
        $noticia = $field['noticia'];
        $fecha = $field['fecha'];
        $keywords = $field['keywords'];
        $description = $field['description'];
        $nombreUrl = $field['nombreUrl'];
        $textoAlt = $field['textoAlt'];
        $noticias[] = array(
            'titulo' => $nombre,
            'id' => $id,
            'descripcion' => $descripcion,
            'imagen' => $imagen,
            'noticia' => $noticia,
            'fecha' => $fecha,
            'keywords' => $keywords,
            'description' => $nombreUrl,
            'nombreUrl' => $nombreUrl,
            'textoAlt' => $textoAlt
        );
    }