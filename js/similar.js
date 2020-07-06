// Se deben crear unas variables que reciban los datos de la consulta por PHP para que filtre por ciudad y inmuebles
const TOKEN = "X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649";
const ARRIENDO = 'Arriendo';
const ARRIENDO_VENTA = "Arriendo/venta";
var res="";

$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/' + idCiudad + '/zona/0/barrio/0/tipoInm/' + idInmueble + '/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/' + idSede + '/usuario/0',
    type: 'GET',
    beforeSend: function (xhr) {
        xhr.setRequestHeader(
            'Authorization',
            'Basic ' + btoa('Authorization:' + TOKEN));
    },
    'dataType': "json",
    success: function (data) {
        if (data == "Sin resultados") {
            // Si es sin resultados traera solo por Tipo Inmueble
            console.log('No encontre resultados por Ciudad, TipoInmueble y sede, voy a buscar por solo tipoInmueble');
            $.ajax({
                url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/' + idInmueble + '/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/'+idSede+'/usuario/0',
                type: 'GET',
                beforeSend: function (xhr) {
                    xhr.setRequestHeader(
                        'Authorization',
                        'Basic ' + btoa('Authorization:' + TOKEN));
                },
                'dataType': "json",
                success: function (data) {
                    if (data == "Sin resultados") {
                        // si esto no da resultado buscar por Tipo Iciudad
                        console.log('No encontre resultados por TipoInmueble y sede, voy a buscar por solo Ciudad');
                        $.ajax({
                            url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/' + idCiudad + '/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/0/usuario/0',
                            type: 'GET',
                            beforeSend: function (xhr) {
                                xhr.setRequestHeader(
                                    'Authorization',
                                    'Basic ' + btoa('Authorization:' + TOKEN));
                            },
                            'dataType': "json",
                            success: function (data) {
                                if (data == "Sin resultados") {
                                    // Si nada de esto da resultado, traer lo que sea
                                    console.log('No Encontre nada, voy a traer los primeros inmuebles que encuentre');
                                    $.ajax({
                                        url: 'https://www.simi-api.com/ApiSimiweb/response/v2.1.3/filtroInmueble/limite/0/total/4/departamento/0/ciudad/0/zona/0/barrio/0/tipoInm/0/tipOper/0/areamin/0/areamax/0/valmin/0/valmax/0/campo/0/order/0/banios/0/alcobas/0/garajes/0/sede/'+idSede+'/usuario/0',
                                        type: 'GET',
                                        beforeSend: function (xhr) {
                                            xhr.setRequestHeader(
                                                'Authorization',
                                                'Basic ' + btoa('Authorization:' + TOKEN));
                                        },
                                        'dataType': "json",
                                        success: function (data) {
                                            if (data == "Sin resultados") {
                                                res += '<h4>Sin Resultados</h4>';
                                                $("#p_similares").append(res);
                                            } else {
                                                var similares = data;
                                                // console.log(similares);
                                                setTimeout(propiedades_similares(similares), 100);
                                                $("#p_similares").append(res);
                                            }
                                        }
                                    });
                                } else {
                                    var similares = data;
                                    // console.log(similares);
                                    console.log("Encontre por ciudad y sede !Imprimir!");
                                    setTimeout(propiedades_similares(similares), 100);
                                    $("#p_similares").append(res);
                                }
                            }
                        });
                    } else {
                        console.log("Encontre por tipo Inmueble y sede !Imprimir!");
                        var similares = data;
                        // console.log(similares);
                        setTimeout(propiedades_similares(similares), 100);
                        $("#p_similares").append(res);
                    }
                }
            });
        } else {
            console.log("Encontre por todos los filtros !Imprimir!");
            var similares = data;
            // console.log(similares);
            setTimeout(propiedades_similares(similares), 100);
            $("#p_similares").append(res);
        }
    }
});

var propiedades_similares = (data) => {
    for (var pos = 0; pos < (data.Inmuebles.length); pos++) {
        if (data.Inmuebles[pos].Codigo_Inmueble != undefined) {
            var codigo = data.Inmuebles[pos].Codigo_Inmueble;
            codigo = codigo.replace("649-", "");
            res += '<div class="item col-sm-12">' +
                '<div class="image">' +
                '<a href="' + data.Inmuebles[pos].Codigo_Inmueble + '" >' +
                '<h3>' + data.Inmuebles[pos].Tipo_Inmueble + '</br>Estrato: ' + data.Inmuebles[pos].Estrato + '</h3>' +
                '<span class="location">Barrio: ' + data.Inmuebles[pos].Barrio + '</span>' +
                '</a>';
            if (data.Inmuebles[pos].foto1 != "") {
                res += '<img src="' + data.Inmuebles[pos].foto1 + '" alt="" id="foto-inmueble">';
            } else {
                res += '<img src="images/logos_en_curvas-01 (3).png" alt="">';
            }
            res += '</div>' +
                '<div class="price">' +
                '<i class="fa fa-home"></i>' + data.Inmuebles[pos].Gestion + '';
            if (data.Inmuebles[pos].Gestion == "Arriendo") {

                res += '<span>' + data.Inmuebles[pos].Canon + '</span>';
            } else if (data.Inmuebles[pos].Gestion == "Arriendo/venta") {

                res += '<span style="font-size:1.3em;">' + data.Inmuebles[pos].Canon + ' / ' + data.Inmuebles[pos].Venta + '</span>';
            } else {
                res += '<span>' + data.Inmuebles[pos].Venta + '</span>';
            }
            res += '</div>' +
                '<ul class="amenities">' +
                '<li>Cod: ' + codigo + '</li>' +
                '<li><i class="fa fa-compress"></i> ' + data.Inmuebles[pos].AreaConstruida + ' m<sup>2</sup></li>' +
                '<li><i class="fa fa-bath"></i> ' + data.Inmuebles[pos].banios + '</li>' +
                '<li><i class="fa fa-bed"></i> ' + data.Inmuebles[pos].Alcobas + '</li>' +
                '<li><i class="fas fa-warehouse negro"></i> ' + data.Inmuebles[pos].garaje + '</li>' +
                '</ul>' +
                '</div>';
        }
    }
    return res;
}
