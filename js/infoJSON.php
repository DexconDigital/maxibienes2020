<?php

header('Access-Control-Allow-Origin: *'); 

require_once("bd_function.php");

$link = Conect();
$array = array();

    $sql = "SELECT * FROM informacion";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $contenido = $field['contenido'];
        $zona = $field['zona'];
        $array[] = array(
            'titulo' => $nombre,
            'id' => $id,
            'contenido' => $contenido,
            'zona' => $zona
        );
    }
$json_string = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json_string;
