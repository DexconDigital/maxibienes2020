<?php 
require 'api_php/config.php';
require 'api_php/num-page.php';
require 'api_php/querystring-search.php';

$pag = $paginaActual;

if (isset($datos[1])) {
    $nombresede =$datos[1];
    if($nombresede == "san-juan"){$sede = 12062;}
    if($nombresede == "colores"){$sede = 12063;}
    if($nombresede == "belen"){$sede = 12064;}
    if($nombresede == "centro"){$sede = 12065;}
    if($nombresede == "sur"){$sede = 12066;}
}
if ($gs == 1) {
    if ($pre == 1) {
        $min = 400000;
        $max = 600000;
    } else if ($pre == 2) {
        $min = 600001;
        $max = 900000;
    } else if ($pre == 3) {
        $min = 900001;
        $max = 1200000;
    } else if ($pre == 4) {
        $min = 900001;
        $max = 1200000;
    } else if ($pre == 5) {
        $min = 1500001;
        $max = 2000000;
    } else if ($pre == 6) {
        $min = 2000001;
        $max = 2500000;
    } else if ($pre == 7) {
        $min = 2500001;
        $max = 3000000;
    } else if ($pre == 8) {
        $min = 3000001;
        $max = 3500000;
    } else if ($pre == 9) {
        $min = 3500001;
        $max = 4000000;
    } else if ($pre == 10) {
        $min = 4000001;
        $max = 4500000;
    } else if ($pre == 11) {
        $min = 4500001;
        $max = 0;
    } else {
        $min = 0;
        $max = 0;
    }
}else if ($gs == 2) {
    if ($pre == 1) {
        $min = 400000;
        $max = 10000000;
    } else if ($pre == 2) {
        $min = 10000001;
        $max = 20000000;
    } else if ($pre == 3) {
        $min = 20000001;
        $max = 30000000;
    } else if ($pre == 4) {
        $min = 30000001;
        $max = 40000000;
    } else if ($pre == 5) {
        $min = 40000001;
        $max = 50000000;
    } else if ($pre == 6) {
        $min = 50000001;
        $max = 60000000;
    } else if ($pre == 7) {
        $min = 60000001;
        $max = 70000000;
    } else if ($pre == 8) {
        $min = 70000001;
        $max = 80000000;
    } else if ($pre == 9) {
        $min = 80000001;
        $max = 90000000;
    } else if ($pre == 10) {
        $min = 90000001;
        $max = 100000000;
    } else if ($pre == 11) {
        $min = 100000001;
        $max = 150000000;
    } else if ($pre == 12) {
        $min = 150000001;
        $max = 200000000;
    } else if ($pre == 13) {
        $min = 200000001;
        $max = 250000000;
    } else if ($pre == 14) {
        $min = 250000001;
        $max = 300000000;
    } else if ($pre == 15) {
        $min = 300000001;
        $max = 350000000;
    } else if ($pre == 16) {
        $min = 350000001;
        $max = 400000000;
    } else if ($pre == 17) {
        $min = 400000001;
        $max = null;
    } else {
        $min = 0;
        $max = 0;
    }
}else if ($gs == 5) {
    if ($pre == 1) {
        $min = 400000;
        $max = 10000000;
    } else if ($pre == 2) {
        $min = 10000001;
        $max = 20000000;
    } else if ($pre == 3) {
        $min = 20000001;
        $max = 30000000;
    } else if ($pre == 4) {
        $min = 30000001;
        $max = 40000000;
    } else if ($pre == 5) {
        $min = 40000001;
        $max = 50000000;
    } else if ($pre == 6) {
        $min = 50000001;
        $max = 60000000;
    } else if ($pre == 7) {
        $min = 60000001;
        $max = 70000000;
    } else if ($pre == 8) {
        $min = 70000001;
        $max = 80000000;
    } else if ($pre == 9) {
        $min = 80000001;
        $max = 90000000;
    } else if ($pre == 10) {
        $min = 90000001;
        $max = 100000000;
    } else if ($pre == 11) {
        $min = 100000001;
        $max = 150000000;
    } else if ($pre == 12) {
        $min = 150000001;
        $max = 200000000;
    } else if ($pre == 13) {
        $min = 200000001;
        $max = 250000000;
    } else if ($pre == 14) {
        $min = 250000001;
        $max = 300000000;
    } else if ($pre == 15) {
        $min = 300000001;
        $max = 350000000;
    } else if ($pre == 16) {
        $min = 350000001;
        $max = 400000000;
    } else if ($pre == 17) {
        $min = 400000001;
        $max = null;
    } else {
        $min = 0;
        $max = 0;
    }
}

// if($nombresede !== "sur"){
$ch = curl_init();
$headers =  'Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649';
curl_setopt($ch, CURLOPT_URL,'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'.$pag.'/total/12/departamento/0/ciudad/'.$ci.'/zona/0/barrio/'.$zo.'/tipoInm/'.$ti.'/tipOper/'.$gs.'/areamin/'.$armin.'/areamax/'.$armax.'/valmin/'.$min.'/valmax/'.$max.'/campo/0/order/desc/banios/'.$ba.'/alcobas/'.$al.'/garajes/'.$par.'/sede/'.$sede.'/usuario/0');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, $headers);
$result = curl_exec($ch);
curl_close($ch);
$r = json_decode($result, true); 


// }else{
    // $ch2 = curl_init();
    // $headers2 =  'Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618';
    // curl_setopt($ch2, CURLOPT_URL,'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'.$pag.'/total/12/departamento/0/ciudad/'.$ci.'/zona/0/barrio/'.$zo.'/tipoInm/'.$ti.'/tipOper/'.$gs.'/areamin/'.$armin.'/areamax/'.$armax.'/valmin/'.$min.'/valmax/'.$max.'/campo/0/order/desc/banios/'.$ba.'/alcobas/'.$al.'/garajes/'.$par.'/usuario/0');
    // curl_setopt($ch2, CURLOPT_CUSTOMREQUEST, "GET");
    // curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    // curl_setopt($ch2, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, TRUE);
    // curl_setopt($ch2, CURLOPT_USERPWD, $headers2);
    // $result2 = curl_exec($ch2);
    // curl_close($ch2);
    // $r2 = json_decode($result2, true); 

    // $r = $r2;
    // $ch = $ch2;
    
    
// }

function modeloInmueble ($r, $url){
    require 'api_php/num-page.php';
    $site = "";
    if ($isCampusSouth){
        $site = "sur";
    }
    $r = $r['Inmuebles'];
    for ($i = 0; $i < count($r); $i++) {
        $r[$i]['foto1'] = existeImagen($r[$i]['foto1'], $url);
        $api = $r[$i];
        $api['Codigo_Inmueble'] = str_ireplace("649-", "", $api['Codigo_Inmueble']);
        $api['Codigo_Inmueble'] = str_ireplace("618-", "", $api['Codigo_Inmueble']);
        echo '
        <div class="item col-sm-4">
        <div class="image" style="width: 100%;"><a href="'.$url.'descripcion-del-inmueble/codigo/'.$api['Codigo_Inmueble'].'/'.$site.'">
        <h3>'.$api['Tipo_Inmueble'].'<br>Estrato: '.$api['Estrato'].'</h3><span class="location">Barrio: '.$api['Barrio'].'</span></a>
        <img src="'.$api['foto1'].'" alt="" id="foto-inmueble"></div>
        <div class="price">
        <i class="fa fa-home"></i>'.$api['Gestion'].'';
        if($api['Gestion'] == 'Arriendo/venta'){
            echo '<span>$ '.$api['Canon'].' /$ '.$api['Venta'].'</span></div>';
        }else if( $api['Gestion'] == 'Arriendo'){
            echo '<span>$ '.$api['Canon'].'</span></div>';
        }else{
            echo '<span>$ '.$api['Venta'].'</span></div>';
        }
        echo '
        <ul class="amenities">
            <li>Cod: '.$api['Codigo_Inmueble'].'</li>
            <li><i class="fa fa-compress"></i> '.$api['AreaConstruida'].' m<sup>2</sup></li>
            <li><i class="fa fa-bath"></i> '.$api['banios'].'</li>
            <li><i class="fa fa-bed"></i> '.$api['Alcobas'].'</li>
            <li><i class="fas fa-warehouse negro"></i> '.$api['garaje'].'</li>
        </ul>
    </div>
        ';    
    }
}

function existeImagen($r, $url)
{
    if ($r == "") {
        $r = ''.$url.'images/logos_en_curvas-01 (3).png';
    }
    return $r;
}

?>
