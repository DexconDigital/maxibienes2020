<?php

header('Access-Control-Allow-Origin: *'); 
require_once("bd_function.php");

$array = array();
$link = Conect();

    $sql = "SELECT * FROM links";
    $result = mysqli_query($link, $sql) or die(mysqli_error($link));
    
    while ($field = mysqli_fetch_array($result)) {
        $facebook = $field['facebook'];
        $id = $field['id'];
        $youtube = $field['youtube'];
        $instagram = $field['instagram'];
        $whatsapp = $field['n_whatsapp'];
        $twitter = $field['twitter'];
        $pse = $field['pse'];
        $seg_pse = $field['seg_pse'];
        $array[] = array(
            'facebook' => $facebook,
            'id' => $id,
            'youtube' => $youtube,
            'instagram' => $instagram,
            'whatsapp' => $whatsapp,
            'twitter' => $twitter,
            'pse' => $pse,
            'segpse' => $seg_pse
        );
    }
$json_string = json_encode($array, JSON_FORCE_OBJECT);
echo $json_string;
?>