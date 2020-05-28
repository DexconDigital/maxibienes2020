// Requiere archivo token.js
// Requiere archivo validadores.js
// Requiere archivo modelo_inmueble.js

// valor random


$.ajax({
    url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/1/limit/0/sede/12062',
     type: 'GET',
     beforeSend: function (xhr) {
     xhr.setRequestHeader(
        'Authorization',
                "Basic " +
                btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649"));
     },
     'dataType': "json",
     success:function(data){
         console.log(data);
         var contenedor_inmueble = '';
         var res="";
         if(data == "Sin resultados"){
            contenedor_inmueble += '<h3 class="text-center pb-4 mb-4" >No hay Inmuebles destacados </h3>';
             $("#propiedades_destacadas").append(contenedor_inmueble);
         }else{
        var totalInmuebles = data.infoAdd.totalInmuebles;
        console.log(totalInmuebles);
         $.ajax({
               url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/'+totalInmuebles+'/limit/0/sede/12062',
                type: 'GET',
                beforeSend: function (xhr) {
                xhr.setRequestHeader(
                   'Authorization',
                   "Basic " +
                   btoa("Authorization:X55SUuw0CvTLt1tYWQCSybxNKAUNDaAhLkoxpFct-649"));
                   },
                'dataType': "json",
                success: function (data) {
                    var data = data;
                    if (data == "Sin resultados") {
                        contenedor_inmueble += '<h1 class="text-center pb-4 mb-4" >No hay Inmuebles destacados </h1>';
                        $("#propiedades_destacadas").append(contenedor_inmueble);
                    } else {
                        var numerostop = totalInmuebles;
                        var pos = 0;
                        for (var pos; pos < numerostop; pos++) {
                            if (data[pos].Codigo_Inmueble != undefined) {
                                var codigo = data[pos].Codigo_Inmueble.replace("649-", "");
                                res +=
                                    '<div class="item">' +
                                    '<div class="image" style="width: 100%;">' +
                                    '<a href="' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + codigo + '" >' +
                                    '<h3>' + data[pos].Tipo_Inmueble + '</br>Estrato: ' + data[pos].Estrato + '</h3>' +
                                    '<span class="location">Barrio: ' + data[pos].Barrio + '</span>' +
                                    '</a>';
                                if (data[pos].foto1 != "") {
                                    res += '<img src="' + data[pos].foto1 + '" alt="" id="foto-inmueble">';
                                } else {
                                    res += '<img src="images/logos_en_curvas-01 (3).png" alt="">';
                                }
                                res += '</div>' +
                                    '<div class="price">' +
                                    '<i class="fa fa-home"></i>' + data[pos].Gestion + '';
                                if (data[pos].Gestion == "Arriendo") {

                                    res += '<span>' + data[pos].Canon + '</span>';
                                } else if (data[pos].Gestion == "Arriendo/venta") {

                                    res += '<span style="font-size:1.3em;">' + data[pos].Canon + ' / ' + data[pos].Venta + '</span>';
                                } else {
                                    res += '<span>' + data[pos].Venta + '</span>';
                                }
                                res += '</div>' +
                                    '<ul class="amenities">' +
                                    '<li>Cod: ' + data[pos].Codigo_Inmueble + '</li>' +
                                    '<li><i class="fa fa-compress"></i> ' + data[pos].AreaConstruida + ' m<sup>2</sup></li>' +
                                    '<li><i class="fa fa-bath"></i> ' + data[pos].banios + '</li>' +
                                    '<li><i class="fa fa-bed"></i> ' + data[pos].Alcobas + '</li>' +
                                    '</ul>' +
                                    '</div>';

                            }
                        }
                        $("#propiedades_destacadas").append(res);
                        var carouselDestacadas = () => {
                            $('#propiedades_destacadas').owlCarousel({
                                loop: true,
                                margin: 30,
                                nav: true,
                                autoplay: 100,
                                autoplayHoverPause: false,
                                responsive: {
                                    0: {
                                        items: 1
                                    },
                                    728: {
                                        items: 2
                                    },
                                    1000: {
                                        items: 3
                                    },
                                    1400: {
                                        items: 3
                                    }
                                }

                            })
                        }
                        setTimeout(carouselDestacadas());
                    }
                }             
            });
        }
     }});
     