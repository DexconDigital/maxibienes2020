<!DOCTYPE html>
<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    	<meta name="description" content="Empresa en Medellin con amplia experiencia con arriendo y venta de propiedades.">
	<meta name="keywords" content="apartamentos en arriendo medellin, alquiler de apartamentos en medellin, arrendamientos envigado
	, casas en arriendo medellin, inmobiliarias en medellin, agencias inmobiliarias en medellin,agencias de arrendamientos en medellin ">
    <?php
    $sede = 0;
    $id = 0;
    $pag = 0;
    $ci = 0;
    $zo= 0;
    $ti=0;
    $gs=0;
    $ban=0;
    $al=0;
    $par=0;

    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    if(isset($_GET["sede"]) && isset($_GET["pag"])){
        $sede = $_GET["sede"];
        $pag = $_GET["pag"];
    }
    if(isset($_GET['al']) &&isset($_GET["sede"]) && isset($_GET["pag"]) && isset($_GET["ci"]) && isset($_GET["zo"]) && isset($_GET["ti"]) && isset($_GET["gs"])){
        $sede = $_GET["sede"];
        $pag = $_GET["pag"];
        $ci = $_GET["ci"];
        $zo= $_GET["zo"];
        $ti= $_GET["ti"];
        $gs= $_GET["gs"];
        $ban= $_GET["ban"];
        $al= $_GET["al"];
    }
    if(isset($_GET["par"])){
        $par=$_GET["par"];
    }

    ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Georeferación</title>
    <style>
        #map {
            height: 80%;
        }
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136598713-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-136598713-1');
</script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
        crossorigin="anonymous"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCmu-UkTcheWni6_HMOKYU9x3AYP571e5s&callback=initMap" ></script>


    <script src="js/peticion.js"></script>
</head>

<body>
    <div id="map" style="width: 100%; height: 90%;"></div>
    <?php echo '<script>var par = ' . $par . '</script>'; ?>
    <?php echo '<script>var al = ' . $al . '</script>'; ?>
    <?php echo '<script>var ban = ' . $ban . '</script>'; ?>
    <?php echo '<script>var gs = ' . $gs . '</script>'; ?>
    <?php echo '<script>var ti = ' . $ti . '</script>'; ?>
    <?php echo '<script>var zo = ' . $zo . '</script>'; ?>
    <?php echo '<script>var pag = ' . $pag . '</script>'; ?>
    <?php echo '<script>var ci = ' . $id . '</script>'; ?>
    <?php echo '<script>var sede = ' . $sede . '</script>'; ?>

    <script>
        console.log("hola Mudo" + al);
        // var res_ciudad;
        // var operacion;
        // var inmueble;
        // var barrio;
        // var precio1;
        // res_ciudad = parseInt(sessionStorage.getItem("ciudadselect")); 
        // operacion=sessionStorage.getItem("operacionselect");
        // inmueble=sessionStorage.getItem("inmuebleselect");
        // barrio=sessionStorage.getItem("zonaselect");
        // precio1=sessionStorage.getItem("precio");
        // var min = 0, max = 0;
        // if (sessionStorage.getItem("operacionselect") == 1) {
        //     if (sessionStorage.getItem("precio") == 1) {
        //         min = 400000;
        //         max = 600000;
        //     } else if (sessionStorage.getItem("precio") == 2) {
        //         min = 600001;
        //         max = 900000;
        //     } else if (sessionStorage.getItem("precio") == 3) {
        //         min = 900001;
        //         max = 1200000;
        //     } else if (sessionStorage.getItem("precio") == 4) {
        //         min = 1200001;
        //         max = 1500000;
        //     } else if (sessionStorage.getItem("precio") == 5) {
        //         min = 1500001;
        //         max = 2000000;
        //     } else if (sessionStorage.getItem("precio") == 6) {
        //         min = 2000001;
        //         max = 2500000;
        //     } else if (sessionStorage.getItem("precio") == 7) {
        //         min = 2500001;
        //         max = 3000000;
        //     } else if (sessionStorage.getItem("precio") == 8) {
        //         min = 3000001;
        //         max = 3500000;
        //     } else if (sessionStorage.getItem("precio") == 9) {
        //         min = 3500001;
        //         max = 4000000;
        //     } else if (sessionStorage.getItem("precio") == 10) {
        //         min = 4000001;
        //         max = 4500000;
        //     } else if (sessionStorage.getItem("precio") == 11) {
        //         min = 4500001;
        //         max = null;
        //     } else {
        //         min = 0;
        //         max = 0;
        //     }
        // }
        // else if (sessionStorage.getItem("operacionselect") == 2 ) {

        //     if (sessionStorage.getItem("precio") == 1) {
        //         min = 400000;
        //         max = 10000000;
        //     } else if (sessionStorage.getItem("precio") == 2) {
        //         min = 10000001;
        //         max = 20000000;
        //     } else if (sessionStorage.getItem("precio") == 3) {
        //         min = 20000001;
        //         max = 30000000;
        //     } else if (sessionStorage.getItem("precio") == 4) {
        //         min = 30000001;
        //         max = 40000000;
        //     } else if (sessionStorage.getItem("precio") == 5) {
        //         min = 40000001;
        //         max = 50000000;
        //     } else if (sessionStorage.getItem("precio") == 6) {
        //         min = 50000001;
        //         max = 60000000;
        //     } else if (sessionStorage.getItem("precio") == 7) {
        //         min = 60000001;
        //         max = 70000000;
        //     } else if (sessionStorage.getItem("precio") == 8) {
        //         min = 70000001;
        //         max = 80000000;
        //     } else if (sessionStorage.getItem("precio") == 9) {
        //         min = 80000001;
        //         max = 90000000;
        //     } else if (sessionStorage.getItem("precio") == 10) {
        //         min = 90000001;
        //         max = 100000000;
        //     } else if (sessionStorage.getItem("precio") == 11) {
        //         min = 100000001;
        //         max = 150000000;
        //     } else if (sessionStorage.getItem("precio") == 12) {
        //         min = 150000001;
        //         max = 200000000;
        //     } else if (sessionStorage.getItem("precio") == 13) {
        //         min = 200000001;
        //         max = 250000000;
        //     } else if (sessionStorage.getItem("precio") == 14) {
        //         min = 250000001;
        //         max = 300000000;
        //     } else if (sessionStorage.getItem("precio") == 15) {
        //         min = 300000001;
        //         max = 350000000;
        //     } else if (sessionStorage.getItem("precio") == 16) {
        //         min = 350000001;
        //         max = 400000000;
        //     } else if (sessionStorage.getItem("precio") == 17) {
        //         min = 400000001;
        //         max = null;
        //     } else {
        //         min = 0;
        //         max = 0;
        //     }
        // }
        // else if (sessionStorage.getItem("operacionselect") == 5 ) {

        //     if (sessionStorage.getItem("precio") == 1) {
        //         min = 400000;
        //         max = 10000000;
        //     } else if (sessionStorage.getItem("precio") == 2) {
        //         min = 10000001;
        //         max = 20000000;
        //     } else if (sessionStorage.getItem("precio") == 3) {
        //         min = 20000001;
        //         max = 30000000;
        //     } else if (sessionStorage.getItem("precio") == 4) {
        //         min = 30000001;
        //         max = 40000000;
        //     } else if (sessionStorage.getItem("precio") == 5) {
        //         min = 40000001;
        //         max = 50000000;
        //     } else if (sessionStorage.getItem("precio") == 6) {
        //         min = 50000001;
        //         max = 60000000;
        //     } else if (sessionStorage.getItem("precio") == 7) {
        //         min = 60000001;
        //         max = 70000000;
        //     } else if (sessionStorage.getItem("precio") == 8) {
        //         min = 70000001;
        //         max = 80000000;
        //     } else if (sessionStorage.getItem("precio") == 9) {
        //         min = 80000001;
        //         max = 90000000;
        //     } else if (sessionStorage.getItem("precio") == 10) {
        //         min = 90000001;
        //         max = 100000000;
        //     } else if (sessionStorage.getItem("precio") == 11) {
        //         min = 100000001;
        //         max = 150000000;
        //     } else if (sessionStorage.getItem("precio") == 12) {
        //         min = 150000001;
        //         max = 200000000;
        //     } else if (sessionStorage.getItem("precio") == 13) {
        //         min = 200000001;
        //         max = 250000000;
        //     } else if (sessionStorage.getItem("precio") == 14) {
        //         min = 250000001;
        //         max = 300000000;
        //     } else if (sessionStorage.getItem("precio") == 15) {
        //         min = 300000001;
        //         max = 350000000;
        //     } else if (sessionStorage.getItem("precio") == 16) {
        //         min = 350000001;
        //         max = 400000000;
        //     } else if (sessionStorage.getItem("precio") == 17) {
        //         min = 400000001;
        //         max = null;
        //     } else {
        //         min = 0;
        //         max = 0;
        //     }
        // }
        $.ajax({
            
            url: 'http://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/'+pag+'/total/12/departamento/0/ciudad/'+ci+'/zona/0/barrio/'+zo+'/tipoInm/'+ti+'/tipOper/'+gs+'/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/desc/banios/'+ban+'/alcobas/'+al+'/garajes/'+par+'/sede/'+sede+'/usuario/0',
            type: 'GET',

            beforeSend: function (xhr) {
                xhr.setRequestHeader(
                    'Authorization',
                    'Basic ' + btoa('Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649'));
            },
            'dataType': "json",
            success: function (data) {
                var res = "";
                console.log(data);
                if (data == "Sin resultados") {
                } else {
                    var infowindow = new google.maps.InfoWindow();
                    var indicator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                    var marker, i, j = 0, markers = [];
                    for (i = 0; i < parseInt(data.Inmuebles.length); i++) {
                        marker = new google.maps.Marker({
                            position: new google.maps.LatLng(data.Inmuebles[i].latitud, data.Inmuebles[i].longitud),
                            map: map
                        });

                        markers.push(marker);

                        j++;
                        google.maps.event.addListener(marker, 'click', (function (marker, i) {
                            return function () {
                                infowindow.setContent("Codigo Inmueble: " + data.Inmuebles[i].Codigo_Inmueble + 
                                "<br><a target='_blank' href='descripcion-del-inmueble/"+data.Inmuebles[i].Codigo_Inmueble+"'><img src='" + data.Inmuebles[i].foto1 + "' style='width: 200px;height: 170px'  ></a>"+
                                "<br>Barrio: " +data.Inmuebles[i].Barrio + "<br>Tipo De Inmueble: " + data.Inmuebles[i].Tipo_Inmueble + "<br>Gestion: " + data.Inmuebles[i].Gestion +
                                    "<br><a  target='_blank' href='descripcion-del-inmueble/" + data.Inmuebles[i].Codigo_Inmueble + "'>Ver Inmueble</a>");
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                        google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
                            return function () {
                                infowindow.setContent("Codigo Inmueble: " + data.Inmuebles[i].Codigo_Inmueble + 
                                 "<br><a target='_blank' href='descripcion-del-inmueble/"+data.Inmuebles[i].Codigo_Inmueble+"'><img src='" + data.Inmuebles[i].foto1 + "' style='width: 200px;height: 170px'  ></a>"+
                                "<br>Barrio: " +
                                    data.Inmuebles[i].Barrio + "<br>Tipo De Inmueble: " + data.Inmuebles[i].Tipo_Inmueble + "<br>Gestion: " + data.Inmuebles[i].Gestion +
                                    "<br><a  target='_blank' href='descripcion-del-inmueble/" + data.Inmuebles[i].Codigo_Inmueble + "'>Ver Inmueble</a>");
                                infowindow.open(map, marker);
                            }
                        })(marker, i));
                        
                    }

                    var mcOptions = { gridSize: 50, maxZoom: 15, imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' };
                    var markerCluster = new MarkerClusterer(map, markers, mcOptions);
                    
                }

            }

        });
    </script>

    <script>
        var map;
        }


    </script>




</body>

</html>