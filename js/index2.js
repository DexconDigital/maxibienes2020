// Requiere archivo token.js
// Requiere archivo validadores.js
// Requiere archivo modelo_inmueble.js

// valor random
var sede = "sur";
// $.ajax({
//     //url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/1/limit/0/sede/12066',
//      url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/10/limite/1',
//      type: 'GET',
//      beforeSend: function (xhr) {
//      xhr.setRequestHeader(
//         'Authorization',
//                 "Basic " + btoa("Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618"));
//                 //"Basic " + btoa("Authorization:B561rNGlLXtzYqvEAJ7I34CeHccolMkBV3ITTRbH-971"));
//      },
//      'dataType': "json",
//      success:function(data){
//          console.log(data);
//          var contenedor_inmueble = '';
//          var res="";
//          if(data == "Sin resultados"){
//             contenedor_inmueble += '<h3 class="text-center pb-4 mb-4" >No hay Inmuebles destacados </h3>';
//              $("#propiedades_destacadas2").append(contenedor_inmueble);
//          }else{
//         var totalInmuebles = data.infoAdd.totalInmuebles;
//         console.log(totalInmuebles);
//          $.ajax({
//             // url: 'https://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/'+totalInmuebles+'/limit/0/sede/12066',
//               url: 'http://www.simi-api.com/ApiSimiweb/response/v21/inmueblesDestacados/total/'+totalInmuebles+'/limite/1',
//                 type: 'GET',
//                 beforeSend: function (xhr) {
//                 xhr.setRequestHeader(
//                   'Authorization',
//                   "Basic " + btoa("Authorization:EWV2W2ffSuzyP788mVKlPDtfBbQIinrCJgpAWTjq-618"));
//                   //"Basic " + btoa("Authorization:B561rNGlLXtzYqvEAJ7I34CeHccolMkBV3ITTRbH-971"));
//                   },
//                 'dataType': "json",
//                 success: function (data) {
//                     var data = data;
//                     if (data == "Sin resultados") {
//                         contenedor_inmueble += '<h1 class="text-center pb-4 mb-4" >No hay Inmuebles destacados </h1>';
//                         $("#propiedades_destacadas2").append(contenedor_inmueble);
//                     } else if (totalInmuebles == 1) {
//                         var pos = 0;
//                         if (data[pos].Codigo_Inmueble != undefined) {
//                             var codigo = data[pos].Codigo_Inmueble;
//                             codigo = codigo.replace("618-", "");
//                             res +=
//                                 '<div class="item">' +
//                                 '<div class="image" style="width: 100%;">' +
//                                 '<a href="' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + codigo + '/' + sede + '" >' +
//                                 '<h3>' + data[pos].Tipo_Inmueble + '</br>Estrato: ' + data[pos].Estrato + '</h3>' +
//                                 '<span class="location">Barrio: ' + data[pos].Barrio + '</span>' +
//                                 '</a>';
//                             if (data[pos].foto1 != "") {
//                                 res += '<img src="' + data[pos].foto1 + '" alt="" id="foto-inmueble">';
//                             } else {
//                                 res += '<img src="images/logos_en_curvas-01 (3).png" alt="">';
//                             }
//                             res += '</div>' +
//                                 '<div class="price">' +
//                                 '<i class="fa fa-home"></i>' + data[pos].Gestion + '';
//                             if (data[pos].Gestion == "Arriendo") {

//                                 res += '<span>' + data[pos].Canon + '</span>';
//                             } else if (data[pos].Gestion == "Arriendo/venta") {

//                                 res += '<span style="font-size:1.3em;">' + data[pos].Canon + ' / ' + data[pos].Venta + '</span>';
//                             } else {
//                                 res += '<span>' + data[pos].Venta + '</span>';
//                             }
//                             res += '</div>' +
//                                 '<ul class="amenities">' +
//                                 '<li>Cod: ' + codigo + '</li>' +
//                                 '<li><i class="fa fa-compress"></i> ' + data[pos].AreaConstruida + ' m<sup>2</sup></li>' +
//                                 '<li><i class="fa fa-bed"></i> ' + data[pos].banios + '</li>' +
//                                 '<li><i class="fa fa-bath"></i> ' + data[pos].Alcobas + '</li>' +
//                                 '<li><i class="fas fa-warehouse negro"></i> ' + data[pos].garaje + '</li>' +
//                                 '</ul>' +
//                                 '</div>';
//                         }


//                         $("#propiedades_destacadas2").append(res);
//                         $('#columna-destacadas').removeClass('col-md-10');
//                         $('#columna-destacadas').addClass('col-md-4');
//                         setTimeout(() => {
//                             console.log('por favor');
//                             $("#propiedades_destacadas2").owlCarousel({
//                                 nav: true,
//                                 autoplay: true,
//                                 autoplayTimeout: 2000,
//                                 loop: true,
//                                 responsive: {
//                                     0: {
//                                         items: 1,
//                                         nav: true
//                                     },
//                                     600: {
//                                         items: 1,
//                                         nav: false
//                                     },
//                                     1000: {
//                                         items: 1,
//                                         nav: true,
//                                         loop: false
//                                     }
//                                 }
//                             });
//                         }, 500);
//                     } else if (totalInmuebles == 2) {
//                         totalInmuebles = totalInmuebles;
//                         var maximoPropiedas = 9;
//                         var numerostop = totalInmuebles - maximoPropiedas;
//                         var final = totalInmuebles;
//                         for (var pos = 0; pos < final; pos++) {
//                             console.log('hola');
//                             if (data[pos].Codigo_Inmueble != undefined) {
//                                 var codigo = data[pos].Codigo_Inmueble;
//                                 codigo = codigo.replace("618-", "");
//                                 res +=
//                                     '<div class="item">' +
//                                     '<div class="image" style="width: 100%;">' +
//                                     '<a href="' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + codigo + '/' + sede + '" >' +
//                                     '<h3>' + data[pos].Tipo_Inmueble + '</br>Estrato: ' + data[pos].Estrato + '</h3>' +
//                                     '<span class="location">Barrio: ' + data[pos].Barrio + '</span>' +
//                                     '</a>';
//                                 if (data[pos].foto1 != "") {
//                                     res += '<img src="' + data[pos].foto1 + '" alt="" id="foto-inmueble">';
//                                 } else {
//                                     res += '<img src="images/logos_en_curvas-01 (3).png" alt="">';
//                                 }
//                                 res += '</div>' +
//                                     '<div class="price">' +
//                                     '<i class="fa fa-home"></i>' + data[pos].Gestion + '';
//                                 if (data[pos].Gestion == "Arriendo") {

//                                     res += '<span>' + data[pos].Canon + '</span>';
//                                 } else if (data[pos].Gestion == "Arriendo/venta") {

//                                     res += '<span style="font-size:1.3em;">' + data[pos].Canon + ' / ' + data[pos].Venta + '</span>';
//                                 } else {
//                                     res += '<span>' + data[pos].Venta + '</span>';
//                                 }
//                                 res += '</div>' +
//                                     '<ul class="amenities">' +
//                                     '<li>Cod: ' + data[pos].Codigo_Inmueble + '</li>' +
//                                     '<li><i class="fa fa-compress"></i> ' + data[pos].AreaConstruida + ' m<sup>2</sup></li>' +
//                                     '<li><i class="fa fa-bed"></i> ' + data[pos].banios + '</li>' +
//                                     '<li><i class="fa fa-bath"></i> ' + data[pos].Alcobas + '</li>' +
//                                     '<li><i class="fas fa-warehouse"></i> ' + data[pos].garaje + '</li>' +
//                                     '</ul>' +
//                                     '</div>';

//                             }
//                         }

//                         $("#propiedades_destacadas2").append(res);
//                         $('#columna-destacadas').removeClass('col-md-10');
//                         $('#columna-destacadas').addClass('col-md-7');
//                         console.log('por favor');
//                         setTimeout(() => {
                            
//                             $("#propiedades_destacadas2").owlCarousel({
//                                 nav: true,
//                                 margin: 30, 
//                                 autoplay: true,
//                                 autoplayTimeout: 2000,
//                                 loop: true,
//                                 responsive: {
//                                     0: {
//                                         items: 1,
//                                         nav: true
//                                     },
//                                     600: {
//                                         items: 2,
//                                         nav: false
//                                     },
//                                     1000: {
//                                         items: 2,
//                                         nav: true,
//                                         loop: false
//                                     }
//                                 }
//                             });
//                         }, 1000);

//                     } else {
//                         var numerostop = totalInmuebles;
//                         var pos = 0;
//                         for (var pos; pos < numerostop; pos++) {
//                             if (data[pos].Codigo_Inmueble != undefined) {
//                                 var codigo = data[pos].Codigo_Inmueble.replace("618-", "");
//                                 res +=
//                                     '<div class="item">' +
//                                     '<div class="image" style="width: 100%;">' +
//                                     '<a href="' + URL_LOCAL + 'descripcion-del-inmueble/codigo/' + codigo + '/' + sede + '" >' +
//                                     '<h3>' + data[pos].Tipo_Inmueble + '</br>Estrato: ' + data[pos].Estrato + '</h3>' +
//                                     '<span class="location">Barrio: ' + data[pos].Barrio + '</span>' +
//                                     '</a>';
//                                 if (data[pos].foto1 != "") {
//                                     res += '<img src="' + data[pos].foto1 + '" alt="" id="foto-inmueble">';
//                                 } else {
//                                     res += '<img src="images/logos_en_curvas-01 (3).png" alt="">';
//                                 }
//                                 res += '</div>' +
//                                     '<div class="price">' +
//                                     '<i class="fa fa-home"></i>' + data[pos].Gestion + '';
//                                 if (data[pos].Gestion == "Arriendo") {

//                                     res += '<span>' + data[pos].Canon + '</span>';
//                                 } else if (data[pos].Gestion == "Arriendo/venta") {

//                                     res += '<span style="font-size:1.3em;">' + data[pos].Canon + ' / ' + data[pos].Venta + '</span>';
//                                 } else {
//                                     res += '<span>' + data[pos].Venta + '</span>';
//                                 }
//                                 res += '</div>' +
//                                     '<ul class="amenities">' +
//                                     '<li>Cod: ' + data[pos].Codigo_Inmueble + '</li>' +
//                                     '<li><i class="fa fa-compress"></i> ' + data[pos].AreaConstruida + ' m<sup>2</sup></li>' +
//                                     '<li><i class="fa fa-bath"></i> ' + data[pos].banios + '</li>' +
//                                     '<li><i class="fa fa-bed"></i> ' + data[pos].Alcobas + '</li>' +
//                                     '</ul>' +
//                                     '</div>';

//                             }
//                         }
//                         $("#propiedades_destacadas2").append(res);
//                         var carouselDestacadas = () => {
//                             $('#propiedades_destacadas2').owlCarousel({
//                                 loop: true,
//                                 margin: 30,
//                                 nav: true,
//                                 autoplay: 100,
//                                 autoplayHoverPause: false,   
//                                 responsive: {
//                                     0: {
//                                         items: 1
//                                     },
//                                     728: {
//                                         items: 2
//                                     },
//                                     1000: {
//                                         items: 3
//                                     },
//                                     1400: {
//                                         items: 3
//                                     }
//                                 }

//                             })
//                         }
//                         setTimeout(carouselDestacadas(), 500);
//                     }
//                 }             
//             });
//         }
//      }});

    
