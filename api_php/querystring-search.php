<?php

$sede = 0;
$gs = 0;
$ti = 0;
$ci = 0;
$zo = 0;
$pre = 0;
$pre1 = 0;
$al = 0;
$ba = 0;
$par = 0;
$armin = 0;
$armax = 0;
$min = 0;
$max = 0;

try {
    $queries = array();

    if (strpos($_SERVER['REQUEST_URI'], '?')) {
        parse_str(explode('?', $_SERVER['REQUEST_URI'])[1], $queries);
    }

    foreach ($queries as $key => $value) {
        switch ($key) {
            case 'gestion':
                $gs = $value;
                break;
            case 'tipo-inmueble':
                $ti = $value;
                break;
            case 'ciudad':
                $ci = $value;
                break;
            case 'barrio':
                $zo = $value;
                break;
            case 'precio':
                $pre = $value;
                break;
            case 'alcobas':
                $al = $value;
                break;
            case 'banos':
                $ba = $value;
                break;
            case 'garaje':
                $par = $value;
                break;
            case 'areamin':
                $armin = $value;
                break;
            case 'areamax':
                $armax = $value;
                break;
        }
    }
} catch (Exception $e) { }
