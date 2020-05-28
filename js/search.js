

//guarda el id de los departamentos
var res = new Array();
const TOKEN = "X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649";
const TOKEN2 = "EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618";

$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2/departamento',
    type: 'GET',
    beforeSend: function (xhr) {
        xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:' + TOKEN));
    },
    'dataType': "json",
    success: function (depto) {
        for (var i = 0; i < depto.length; i++) {
            // Funcion para traer ciudades
            $.ajax({
                url: 'https://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/' + depto[i].id,
                type: 'GET',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader(
                        'Authorization',
                        'Basic ' + btoa('Authorization:' + TOKEN));
                },
                'dataType': "json",
                success: function (ciudad) {
                    var ciudades_resultados = "";
                    for (var i = 0; i < ciudad.length; i++) {
                        ciudades_resultados +=
                            '<option value="' + ciudad[i].id + '">' +
                            ciudad[i].nombre +
                            '</option>';
                    }
                    $('.ciudad').append(ciudades_resultados);
                    // Funcion para traer barrios
                }
            });
        }
    }
});
//618
// $.ajax({
//     url: 'https://www.simi-api.com/ApiSimiweb/response/v2/departamento',
//     type: 'GET',
//     beforeSend: function (xhr) {
//         xhr.setRequestHeader(
//             'Authorization',
//             'Basic ' + btoa('Authorization:' + TOKEN2));
//     },
//     'dataType': "json",
//     success: function (depto) {
//         for (var i = 0; i < depto.length; i++) {
//             // Funcion para traer ciudades
//             $.ajax({
//                 url: 'https://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/' + depto[i].id,
//                 type: 'GET',
//                 beforeSend: function (xhr) {
//                     xhr.setRequestHeader(
//                         'Authorization',
//                         'Basic ' + btoa('Authorization:' + TOKEN2));
//                 },
//                 'dataType': "json",
//                 success: function (ciudad) {
//                     var ciudades_resultados = "";
//                     for (var i = 0; i < ciudad.length; i++) {
//                         ciudades_resultados +=
//                             '<option value="' + ciudad[i].id + '">' +
//                             ciudad[i].nombre +
//                             '</option>';
//                     }
//                     $('.ciudad').append(ciudades_resultados);
//                     // Funcion para traer barrios
//                 }
//             });
//         }
//     }
// });

$("#ciudad_venta").change(function () {
    $('#zona_venta').empty();
    var res_ciudad = $("#ciudad_venta option:selected").val();
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + res_ciudad + '/idZona/0',
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
            var informacion = data;
            for (var i = 0; i < informacion.length; i++) {
                resultado += '<option value="' + informacion[i].id + '">' +
                    informacion[i].nombre +
                    "</option>";
            }
            $("#zona_venta").append(resultado);
        }
    });
});
//618
// $("#ciudad_venta").change(function () {
//     $('#zona_venta').empty();
//     var res_ciudad = $("#ciudad_venta option:selected").val();
//     $.ajax({
//         url: 'https://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + res_ciudad + '/idZona/0',
//         type: "GET",
//         beforeSend: function (xhr) {
//             xhr.setRequestHeader(
//                 "Authorization",
//                 "Basic " +
//                 btoa('Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618')
//             );
//         },
//         dataType: "json",
//         success: function (data) {
//             var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
//             var informacion = data;
//             for (var i = 0; i < informacion.length; i++) {
//                 resultado += '<option value="' + informacion[i].id + '">' +
//                     informacion[i].nombre +
//                     "</option>";
//             }
//             $("#zona_venta").append(resultado);
//         }
//     });
// });

$("#ciudad_arriendo").change(function () {
    $('#zona_arriendo').empty();
    var res_ciudad = $("#ciudad_arriendo option:selected").val();
    $.ajax({
        url: 'https://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + res_ciudad + '/idZona/0',
        type: "GET",
        beforeSend: function (xhr) {
            xhr.setRequestHeader(
                "Authorization",
                "Basic " +
                btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649")
            );
        },
        dataType: "json",
        success: function (data) {
            var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
            var informacion = data;
            for (var i = 0; i < informacion.length; i++) {
                resultado += '<option value="' + informacion[i].id + '">' +
                    informacion[i].nombre +
                    "</option>";
            }
            $("#zona_arriendo").append(resultado);
        }
    });
});

//618
// $("#ciudad_arriendo").change(function () {
//     $('#zona_arriendo').empty();
//     var res_ciudad = $("#ciudad_arriendo option:selected").val();
//     $.ajax({
//         url: 'https://www.simi-api.com/ApiSimiweb/response/v2/barrios/idCiudad/' + res_ciudad + '/idZona/0',
//         type: "GET",
//         beforeSend: function (xhr) {
//             xhr.setRequestHeader(
//                 "Authorization",
//                 "Basic " +
//                 btoa('Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618')
//             );
//         },
//         dataType: "json",
//         success: function (data) {
//             var resultado = '<option class="bs-title-option"  value="0">Barrio</option>';
//             var informacion = data;
//             for (var i = 0; i < informacion.length; i++) {
//                 resultado += '<option value="' + informacion[i].id + '">' +
//                     informacion[i].nombre +
//                     "</option>";
//             }
//             $("#zona_arriendo").append(resultado);
//         }
//     });
// });

//get list of properties
$.ajax({
    url: "https://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
    type: "GET",
    beforeSend: function (xhr) {
        xhr.setRequestHeader(
            "Authorization",
            "Basic " +
            btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649")
        );
    },
    dataType: "json",
    success: function (data) {
        var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>';
        var informacion = (data);
        var tipo = localStorage.getItem("tipo");

        for (var i = 0; i < informacion.length; i++) {
            if (tipo == informacion[i].idTipoInm) {

                resultado +=
                    '<option selected value="' +
                    informacion[i].idTipoInm + '" >' +
                    informacion[i].Nombre +
                    "</option>";
            }
            else {


                resultado +=
                    '<option value="' +
                    informacion[i].idTipoInm + '">' +
                    informacion[i].Nombre +
                    "</option>";
            }

        }
        $(".inmueble").html(resultado);
    }
});

//618
// $.ajax({
//     url: "https://www.simi-api.com/ApiSimiweb/response/tipoInmuebles/",
//     type: "GET",
//     beforeSend: function (xhr) {
//         xhr.setRequestHeader(
//             "Authorization",
//             "Basic " +
//             btoa("Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618")
//         );
//     },
//     dataType: "json",
//     success: function (data) {
//         var resultado = '<option class="bs-title-option" value="0">Tipo de Inmueble</option>';
//         var informacion = (data);
//         var tipo = localStorage.getItem("tipo");

//         for (var i = 0; i < informacion.length; i++) {
//             if (tipo == informacion[i].idTipoInm) {

//                 resultado +=
//                     '<option selected value="' +
//                     informacion[i].idTipoInm + '" >' +
//                     informacion[i].Nombre +
//                     "</option>";
//             }
//             else {


//                 resultado +=
//                     '<option value="' +
//                     informacion[i].idTipoInm + '">' +
//                     informacion[i].Nombre +
//                     "</option>";
//             }

//         }
//         $(".inmueble").html(resultado);
//     }
// });


//get list of the transactions
$.ajax({
    url: "https://www.simi-api.com/ApiSimiweb/response/gestion/",
    type: "GET",
    beforeSend: function (xhr) {
        xhr.setRequestHeader(
            "Authorization",
            "Basic " +
            btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649")
        );
    },
    dataType: "json",
    success: function (data) {
        var resultado = '<option class="bs-title-option" value="0">Operación</option>';
        var operacion = localStorage.getItem("gestion");
        for (var i = 0; i < data.length; i++) {
            if (operacion == data[i].idGestion) {

                resultado += '<option selected value="' +
                    data[i].idGestion + '">' +
                    data[i].Nombre +
                    "</option>";
            }
            else {
                resultado += '<option value="' +
                    data[i].idGestion + '">' +
                    data[i].Nombre +
                    "</option>";
            }
        }
        $(".operacion").html(resultado);
    }
});
//618
// $.ajax({
//     url: "https://www.simi-api.com/ApiSimiweb/response/gestion/",
//     type: "GET",
//     beforeSend: function (xhr) {
//         xhr.setRequestHeader(
//             "Authorization",
//             "Basic " +
//             btoa("Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618")
//         );
//     },
//     dataType: "json",
//     success: function (data) {
//         var resultado = '<option class="bs-title-option" value="0">Operación</option>';
//         var operacion = localStorage.getItem("gestion");
//         for (var i = 0; i < data.length; i++) {
//             if (operacion == data[i].idGestion) {

//                 resultado += '<option selected value="' +
//                     data[i].idGestion + '">' +
//                     data[i].Nombre +
//                     "</option>";
//             }
//             else {
//                 resultado += '<option value="' +
//                     data[i].idGestion + '">' +
//                     data[i].Nombre +
//                     "</option>";
//             }
//         }
//         $(".operacion").html(resultado);
//     }
// });


// Obtener sedes
$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/sedes',
    type: 'GET',
    beforeSend: function (xhr) {
        xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649'));
            
    },
    'dataType': "json",
    success: function (response) {
        var resultado = "";
        for (var i = 0; i < response.length; i++) {
            resultado += '<option value="' + response[i].id_scr + '">' + response[i].nombre_scr + '</option>'
        }
        console.log(resultado);
        $('.sedes').append(resultado);
    }
});

//618
// $.ajax({
//     url: 'https://www.simi-api.com/ApiSimiweb/response/sedes',
//     type: 'GET',
//     beforeSend: function (xhr) {
//         xhr.setRequestHeader(
//             'Authorization',
//             'Basic ' + btoa('Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618'));
            
//     },
//     'dataType': "json",
//     success: function (response) {
//         var resultado = "";
//         for (var i = 0; i < response.length; i++) {
//             resultado += '<option value="' + response[i].id_scr + '">' + response[i].nombre_scr + '</option>'
//         }
//         console.log(resultado);
//         $('.sedes').append(resultado);
//     }
// });


$(".operacion").change(function () {
    var operacion = $(".operacion option:selected").val();

    if (window.location.pathname == "/maxibienes/inmuebles-por-sedes.php") {
        sessionStorage.setItem("operacionselect", operacion);

    }
    if (window.location.pathname == "/maxibienes/detalle-inmueble.php") {
        sessionStorage.setItem("operacionselect", operacion);

    }
    if (window.location.pathname == "/maxibienes/") {
        sessionStorage.setItem("operacionselect", operacion);
    }
});

$(".zona").change(function () {
    var zona = $(".zona option:selected").val();

    if (window.location.pathname == "/maxibienes/inmuebles-por-sedes.php") {
        sessionStorage.setItem("zonaselect", zona);

    }
    if (window.location.pathname == "/maxibienes/detalle-inmueble.php") {
        sessionStorage.setItem("zonaselect", zona);

    }

});

$(".inmueble").change(function () {
    var inmueble = $(".inmueble option:selected").val();

    if (window.location.pathname == "/maxibienes/inmuebles-por-sedes.php") {
        sessionStorage.setItem("inmuebleselect", inmueble);
    }

    if (window.location.pathname == "/maxibienes/detalle-inmueble.php") {
        sessionStorage.setItem("inmuebleselect", inmueble);

    }

    if (window.location.pathname == "/maxibienes/") {
        sessionStorage.setItem("inmuebleselect", inmueble);

    }


});

var code,
    alcoba,
    banio,
    parqueadero,
    areamax,
    areamin,
    ciudad,
    inmueble,
    operacion,
    precio,
    zona;

$(".search").click(function (e) {
    e.preventDefault();
    zona = $(".zona option:selected").val();
    inmueble = $(".inmueble option:selected").val();
    ciudad = $(".ciudad option:selected").val();
    operacion = $(".operacion option:selected").val();
    code = $(".codeInm").val();
    alcoba = $(".alcoba option:selected").val();
    banio = $(".banio option:selected").val();
    parqueadero = $(".parqueaderos option:selected").val();
    areamin = $(".areamin").val();
    areamax = $(".areamax").val();
    precio = $(".precio").val();

    zona = existeCampo(zona);
    inmueble = existeCampo(inmueble);
    ciudad = existeCampo(ciudad);
    operacion = existeCampo(operacion);
    precio = existeCampo(precio);
    alcoba = existeCampo(alcoba);
    banio = existeCampo(banio);
    parqueadero = existeCampo(parqueadero);
    areamax = existeCampo(areamax);
    areamin = existeCampo(areamin);


    //  if (code !== "") {
    //    window.location.href = ''+URL_LOCAL+'descripcion-del-inmueble/codigo/' + code + '';
    //  } else {
    //      window.location.href = ''+URL_LOCAL+'resultados-de-la-busqueda-de-inmueble/gestion/'+ operacion + '/tipo-inmueble/' + inmueble + '/ciudad/' + ciudad + '/barrio/' + zona + '/precio/' + precio + '/alcobas/' + alcoba + '/banos/' + banio + '/garaje/' + parqueadero + '/areamin/' + areamin + '/areamax/' + areamax + '/';
    //  }
    if (code !== "") {
        window.location.href = '' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + code + '/' + path;
    } else {
        var arraySearchFieds = [];
        if (gestion_buscar != '0') {
            arraySearchFieds.push("gestion=" + gestion_buscar);
        }
        if (tipo_inmueble_buscar != '0') {
            arraySearchFieds.push("tipo-inmueble=" + tipo_inmueble_buscar);
        }
        if (ciudad_buscar != '0') {
            arraySearchFieds.push("ciudad=" + ciudad_buscar);
        }
        if (barrio_buscar != '0') {
            arraySearchFieds.push("barrio=" + barrio_buscar);
        }
        if (alcobas_buscar != '0') {
            arraySearchFieds.push("alcobas=" + alcobas_buscar);
        }
        if (banos_buscar != '0') {
            arraySearchFieds.push("banos=" + banos_buscar);
        }
        if (garaje_buscar != '0') {
            arraySearchFieds.push("garaje=" + garaje_buscar);
        }
        if (area_min_buscar && area_min_buscar !== "") {
            arraySearchFieds.push("areamin=" + area_min_buscar);
        }
        if (area_max_buscar && area_max_buscar !== "") {
            arraySearchFieds.push("areamax=" + area_max_buscar);
        }
        window.location.href = '' + URL_LOCAL + 'lista-de-inmuebles-sede/' + nombresede + '/?' + arraySearchFieds.join('&');
    }




});
$(".search-1").click(function (e) {
    e.preventDefault();
    zona = $(".zona option:selected").val();
    inmueble = $(".inmueble option:selected").val();
    ciudad = $(".ciudad option:selected").val();
    operacion = $(".operacion option:selected").val();
    code = $(".codeInm").val();
    precio;

    precio = $(".precio").val();


    zona = existeCampo(zona);
    inmueble = existeCampo(inmueble);
    ciudad = existeCampo(ciudad);
    operacion = existeCampo(operacion);
    precio = existeCampo(precio);
    alcoba = existeCampo(alcoba);
    banio = existeCampo(banio);
    parqueadero = existeCampo(parqueadero);
    areamax = existeCampo(areamax);
    areamin = existeCampo(areamin);

    //if (code !== "") {
    //   
    //    } else {
    //        window.location.href = ''+URL_LOCAL+'resultados-de-la-busqueda-de-inmueble/gestion/'+ operacion + '/tipo-inmueble/' + inmueble + '/ciudad/' + ciudad + '/barrio/' + zona + '/precio/' + precio + '/alcobas/' + alcoba + '/banos/' + banio + '/garaje/' + parqueadero + '/areamin/' + areamin + '/areamax/' + areamax + '/pagina/1';
    //    }

    if (code !== "") {
        window.location.href = '' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + code + '/' + path;
    } else {
        var arraySearchFieds = [];
        if (gestion_buscar != '0') {
            arraySearchFieds.push("gestion=" + gestion_buscar);
        }
        if (tipo_inmueble_buscar != '0') {
            arraySearchFieds.push("tipo-inmueble=" + tipo_inmueble_buscar);
        }
        if (ciudad_buscar != '0') {
            arraySearchFieds.push("ciudad=" + ciudad_buscar);
        }
        if (barrio_buscar != '0') {
            arraySearchFieds.push("barrio=" + barrio_buscar);
        }
        if (alcobas_buscar != '0') {
            arraySearchFieds.push("alcobas=" + alcobas_buscar);
        }
        if (banos_buscar != '0') {
            arraySearchFieds.push("banos=" + banos_buscar);
        }
        if (garaje_buscar != '0') {
            arraySearchFieds.push("garaje=" + garaje_buscar);
        }
        if (area_min_buscar && area_min_buscar !== "") {
            arraySearchFieds.push("areamin=" + area_min_buscar);
        }
        if (area_max_buscar && area_max_buscar !== "") {
            arraySearchFieds.push("areamax=" + area_max_buscar);
        }
        window.location.href = '' + URL_LOCAL + 'resultados-de-la-busqueda-de-inmueble/?' + arraySearchFieds.join('&');
    }
});
$(".search-2").click(function (e) {
    e.preventDefault();
    ciudad = $("#ciudad_arriendo option:selected").val();
    zona = $("#zona_arriendo option:selected").val();
    operacion = 1;
    inmueble = $("#inmueble_arriendo option:selected").val();
    var precio;
    precio = $("#precio_arriendo").val();

    zona = existeCampo(zona);
    inmueble = existeCampo(inmueble);
    ciudad = existeCampo(ciudad);
    precio = existeCampo(precio);

    var arraySearchFieds = [];

    arraySearchFieds.push("gestion=" + operacion);

    if (inmueble != '0') {
        arraySearchFieds.push("tipo-inmueble=" + inmueble);
    }
    if (ciudad != '0') {
        arraySearchFieds.push("ciudad=" + ciudad);
    }
    if (zona != '0') {
        arraySearchFieds.push("barrio=" + zona);
    }

    window.location.href = '' + URL_LOCAL + 'resultados-de-la-busqueda-de-inmueble/?' + arraySearchFieds.join('&');
});

$(".search-3").click(function (e) {
    e.preventDefault();
    ciudad = $("#ciudad_venta option:selected").val();
    zona = $("#zona_venta option:selected").val();
    operacion = 5;
    code = $(".codeInm").val();
    inmueble = $("#inmueble_venta option:selected").val();
    precio;
    precio = $("#precio_venta").val();

    zona = existeCampo(zona);
    inmueble = existeCampo(inmueble);
    ciudad = existeCampo(ciudad);
    operacion = existeCampo(operacion);
    precio = existeCampo(precio);
    //    sessionStorage.setItem("precio", precio);

    var arraySearchFieds = [];

    arraySearchFieds.push("gestion=" + operacion);

    if (inmueble != '0') {
        arraySearchFieds.push("tipo-inmueble=" + inmueble);
    }
    if (ciudad != '0') {
        arraySearchFieds.push("ciudad=" + ciudad);
    }
    if (zona != '0') {
        arraySearchFieds.push("barrio=" + zona);
    }

    window.location.href = '' + URL_LOCAL + 'resultados-de-la-busqueda-de-inmueble/?' + arraySearchFieds.join('&');

});


$(".search-4").click(function (e) {
    e.preventDefault();
    var code = $(".codeInm").val();
    window.location.href = '' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + code + '';

});

$(".search-5").click(function (e) {
    e.preventDefault();
    var sede = $(".sedes option:selected").val();
    var nombreSede = "";
    sede = existeCampo(sede);
    if (sede == 12062) { nombreSede = 'san-juan'; }
    if (sede == 12063) { nombreSede = 'colores'; }
    if (sede == 12064) { nombreSede = 'belen'; }
    if (sede == 12065) { nombreSede = 'centro'; }
    if (sede == 12066) { nombreSede = 'sur'; }
    window.location.href = '' + URL_LOCAL + 'lista-de-inmuebles-sede/' + nombreSede + '/';
});

var existeCampo = function (campo) {
    if (campo == null || campo == "Ciudad" || campo == "null" || campo == 0) {
        campo = 0;
    }
    return campo;
}