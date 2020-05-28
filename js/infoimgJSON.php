<?php

header('Access-Control-Allow-Origin: *'); 
require_once("bd_function.php");

$array = array();
$link = Conect();

    $sql = "SELECT * FROM infoimg";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    
    while ($field = mysqli_fetch_array($result)) {
        $nombre = $field['nombre'];
        $id = $field['id'];
        $contenido = $field['contenido'];
        $imagen = $field['imagen'];
        $zona = $field['zona'];
        if($field['link'] == NULL){
            $link = "";
        }else{
            $link = $field['link'];
        }
        $array[] = array(
            'titulo' => $nombre,
            'id' => $id,
            'contenido' => $contenido,
            'imagen' => $imagen,
            'zona' => $zona,
            'link' => $link,
        );
    }
$json_string = json_encode($array, JSON_FORCE_OBJECT);
echo $json_string;
?>