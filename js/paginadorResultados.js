var cantidadPaginas = function (totalPagina, totalInmuebles) {
    totalPagina = Math.ceil(totalInmuebles / totalPagina);
    return totalPagina;
}

var numeroPaginas = cantidadPaginas(totalpagina, totalInmuebles);
console.log(numeroPaginas, totalpagina, totalInmuebles);

var contenido_paginas = 'Pagina ' + pagina + ' de ' + numeroPaginas + '';
$('#numero_pagina').append(contenido_paginas);

if (pagina == 1) {
    $('#ant').css('display', 'none');
} else if (pagina == numeroPaginas) {
    $('#next').css('display', 'none');
}
function paginador(actual) {
    debugger;
    var reemplazar = 'pagina/' + pagina;
    url = url.replace(reemplazar, "");
    if (actual == 1) {
        pagina--;
        location.href = location.origin + location.pathname + 'pagina/' + pagina + location.search;
    }
    if (actual == 2) {
        pagina++;
        location.href = location.origin + location.pathname + 'pagina/' + pagina + location.search;
    }
}
// Cargar Mapa
setTimeout(() => {
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/' + pagina + '/total/12/departamento/0/ciudad/' + ci + '/zona/0/barrio/' + zo + '/tipoInm/' + ti + '/tipOper/' + gs + '/areamin/' + armin + '/areamax/' + armax + '/valmin/' + min + '/valmax/' + max + '/campo/0/order/desc/banios/' + ba + '/alcobas/' + al + '/garajes/' + par + '/sede/0',
        type: 'GET',
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                'Authorization',
                'Basic ' + btoa('Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649'));
        },
        'dataType': "json",
        success: function (data) {
            var res = "";
            if (data == "Sin resultados") {
                console.log("Estoy aqui1 dd222");
            } else {
                var infowindow = new google.maps.InfoWindow();
                var indicator = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
                var marker, i, j = 0, markers = [];
                for (i = 0; i < parseInt(data.Inmuebles.length); i++) {
                    data.Inmuebles[i].Codigo_Inmueble = data.Inmuebles[i].Codigo_Inmueble.replace('649-', '');
                    marker = new google.maps.Marker({
                        position: new google.maps.LatLng(data.Inmuebles[i].latitud, data.Inmuebles[i].longitud),
                        map: map
                    });

                    markers.push(marker);

                    j++;
                    google.maps.event.addListener(marker, 'click', (function (marker, i) {
                        return function () {
                            infowindow.setContent("Codigo Inmueble: " + data.Inmuebles[i].Codigo_Inmueble +
                                "<br><a target='_blank' href='" + URL_LOCAL + "descripcion-del-inmueble/codigo/" + data.Inmuebles[i].Codigo_Inmueble + "'><img src='" + data.Inmuebles[i].foto1 + "' style='width: 200px;height: 170px'  ></a>" +
                                "<br>Barrio: " + data.Inmuebles[i].Barrio + "<br>Tipo De Inmueble: " + data.Inmuebles[i].Tipo_Inmueble + "<br>Gestion: " + data.Inmuebles[i].Gestion +
                                "<br><a  target='_blank' href='" + URL_LOCAL + "descripcion-del-inmueble/codigo/" + data.Inmuebles[i].Codigo_Inmueble + "'>Ver Inmueble</a>");
                            infowindow.open(map, marker);
                        }
                    })(marker, i));
                    google.maps.event.addListener(marker, 'mouseover', (function (marker, i) {
                        return function () {
                            infowindow.setContent("Codigo Inmueble: " + data.Inmuebles[i].Codigo_Inmueble +
                                "<br><a target='_blank' href='" + URL_LOCAL + "descripcion-del-inmueble/codigo/" + data.Inmuebles[i].Codigo_Inmueble + "'><img src='" + data.Inmuebles[i].foto1 + "' style='width: 200px;height: 170px'  ></a>" +
                                "<br>Barrio: " +
                                data.Inmuebles[i].Barrio + "<br>Tipo De Inmueble: " + data.Inmuebles[i].Tipo_Inmueble + "<br>Gestion: " + data.Inmuebles[i].Gestion +
                                "<br><a  target='_blank' href='" + URL_LOCAL + "descripcion-del-inmueble/codigo/" + data.Inmuebles[i].Codigo_Inmueble + "'>Ver Inmueble</a>");
                            infowindow.open(map, marker);
                        }
                    })(marker, i));

                }

                var mcOptions = { gridSize: 50, maxZoom: 15, imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m' };
                var markerCluster = new MarkerClusterer(map, markers, mcOptions);
            }

        }

    })
}, 500);


