<?php

header('Access-Control-Allow-Origin: *'); 

require_once("bd_function.php");

$link = Conect();
$array = array();

    $sql = "SELECT * FROM contacto";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    while ($field = mysqli_fetch_array($result)) {
        $celular = $field['n_celular'];
        $id = $field['id'];
        $correo = $field['correo'];
        $array[] = array(
            'celular' => $celular,
            'id' => $id,
            'correo' => $correo
        );
    }
$json_string = json_encode($array, JSON_UNESCAPED_UNICODE);
echo $json_string;
?>