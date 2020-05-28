<?php

header('Access-Control-Allow-Origin: *'); 

require_once("bd_function.php");

$link = Conect();
$array = array();

    $sql = "SELECT * FROM imagenes";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $imagen = $field['imagen'];
        $id = $field['id'];
        $zona = $field['zona'];
        $array[] = array(
            'imagen' => $imagen,
            'id' => $id,
            'zona' => $zona
        );
    }
$json_string = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json_string;
?>