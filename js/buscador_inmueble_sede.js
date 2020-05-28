//guarda el id de los departamentos
var res = new Array();

//peticion departamentos
$.ajax({
    url: "https://www.simi-api.com/ApiSimiweb/response/v2/departamento/",
    type: "GET",
    beforeSend: function (xhr) {
        xhr.setRequestHeader(
            "Authorization",
            "Basic " +
            btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649")
        );
    },
    dataType: "html",
    success: function (data) {
        var datos = data.trim();
        if (datos.localeCompare('"Sin resultados"') == 0) {
            res += "No hay Inmuebles destacados";
        } else {
            var informacion = JSON.parse(data);
            for (var i = 0; i < informacion.length; i++) {
                //peticion ciudades
                $.ajax({
                    url: "https://www.simi-api.com/ApiSimiweb/response/v2/ciudad/idDepartamento/" + informacion[i].id + "",
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
                        var resultado = '';
                        var informacion = (data);
                        var ciudad = localStorage.getItem("ciudad");
                        for (var i = 0; i < informacion.length; i++) {
                            if (ciudad == informacion[i].id) {
                                resultado += '<option selected value="' +
                                    informacion[i].id +
                                    '">' +
                                    informacion[i].nombre +
                                    "</option>";
                            }
                            else {
                                resultado += '<option value="' +
                                    informacion[i].id +
                                    '">' +
                                    informacion[i].nombre +
                                    "</option>";

                            }
                        }
                        console.log(resultado);
                        $(".ciudad").append(resultado);
                    }
                });
            }
        }
    }
});


$(".ciudad").change(function () {
    var res_ciudad = $(".ciudad option:selected").val();


    if (window.location.pathname == "/maxibienes/inmuebles-por-sedes.php") {
        sessionStorage.setItem("ciudadselect", res_ciudad);
    }

    if (window.location.pathname == "/maxibienes/detalle-inmueble.php") {
        sessionStorage.setItem("ciudadselect", res_ciudad);
    }

    if (window.location.pathname == "/maxibienes/") {
        sessionStorage.setItem("ciudadselect", res_ciudad);
    }
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
            $(".zona").append("");
            $(".zona").html(resultado);
        }
    });
});

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

// Buscar por medio del boton creado en el buscador
$('#buscar').click(function () {
    busqueda();
});

// buscar por medio de la tecla enter
$('body').keyup(function (e) {
    if (e.keyCode == 13) {
        busqueda();
    }
});

// Definir las variables que se van a usar para almacenar los datos que se traen del buscador
var code, garaje_buscar, ciudad_buscar, barrio_buscar, gestion_buscar, tipo_inmueble_buscar, alcobas_buscar, banos_buscar, maximo_buscar,
    area_max_buscar, area_min_buscar;
// Esta funcion trae los campos digitados en el buscador
var busqueda = function () {
    code = $(".codeInm").val();
    ciudad_buscar = $('.ciudad option:selected').val();
    barrio_buscar = $('.zona option:selected').val();
    gestion_buscar = $('.operacion option:selected').val();
    tipo_inmueble_buscar = $('.inmueble option:selected').val();
    alcobas_buscar = $('.alcoba option:selected').val();
    banos_buscar = $('.banio option:selected').val();
    garaje_buscar = $('.parqueaderos option:selected').val();
    area_min_buscar = $('.areamin').val();
    area_max_buscar = $('.areamax').val();
    // console.log(maximo_buscar);

    // Si no trae nada del buscador definirla en cero
    ciudad_buscar = existeCampo(ciudad_buscar);
    barrio_buscar = existeCampo(barrio_buscar);
    gestion_buscar = existeCampo(gestion_buscar);
    tipo_inmueble_buscar = existeCampo(tipo_inmueble_buscar);
    alcobas_buscar = existeCampo(alcobas_buscar);
    banos_buscar = existeCampo(banos_buscar);
    area_min_buscar = existeCampo(area_min_buscar);
    area_max_buscar = existeCampo(area_max_buscar);
    garaje_buscar = existeCampo(garaje_buscar);

    var num = 2;
    if (location.pathname.includes('pagina')) {
        var num = 3;
    }
    var paths = location.pathname.split('/');

    var path = paths[paths.length - num];

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
}
var existeCampo = function (campo) {
    if (campo == null || campo == "Ciudad" || campo == "null" || campo == 0) {
        campo = 0;
    }
    return campo;
}