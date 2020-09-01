
(function ($) {
    "use strict";
    
    // var menu = '<div class="col-sm-12">' +
    //     '<a href="inicio" class="nav-logo"><img src="<?php echo $url_host?>images/maxibienes_antioquia.png" alt="Cozy Logo" /></a>' +
    //     '<nav class="navbar">' +
    //     '<button id="nav-mobile-btn"><i class="fa fa-bars"></i></button>' +
    //     '<ul class="nav navbar-nav" id="items_en_uso">' +
    //     '<li class="dropdown" id="items1">' +
    //     '<a href="inicio">Inicio</a>' +
    //     '</li>' +
    //     '<li class="dropdown" id="items2">' +
    //     '<a href="sobre-nosotros" >Nuestra Compa&ntilde;&iacute;a</a>' +
    //     '</li>' +
    //     '<li class="dropdown">' +
    //     '<a href="servicios" >Servicios</a>' +
    //     '</li>' +
    //     '<li class="dropdown">'+
    //     '<a class="dropdown-toggle" data-toggle="dropdown" href="#">Nuestras Sedes'+
    //     '<span class="caret"></span></a>'+
    //     '<ul class="dropdown-menu">'+
    //       '<li><a href="#">San Juan</a></li>'+
    //       '<li><a href="#">Colores</a></li>'+
    //       '<li><a href="#">Belen</a></li>'+
    //       '<li><a href="#">Sur</a></li>'+
    //     '</ul>'+
    //     '</li>'+
    //     '<li class="dropdown" id="items3">' +
    //     '<a href="seleccionar-sede-inmueble" >Inmuebles</a>' +
    //     '</li>' +
    //     '<li class="dropdown">' +
    //     '<a href="trabaja-con-nosotros">Trabaja con Nosotros</a>' +
    //     '</li>' +
    //     '<li class="dropdown">' +
    //     '<a href="pqrs" >PQRS</a>' +
    //     '</li>' +
    //     '<li class="dropdown">' +
    //     '<a href="blog" >Blog</a>' +
    //     '</li>' +
    //     '<li class="dropdown pse-boton">' +
    //     'Pagos PSE <img src="logopagosPSE.png" onclick="openModal()" style="margin-left: 3px;">'+
    //     '</li>' +
    //     '</ul>' +
    //     '</nav>' +
    //     '</div>';

    // $(".menu-ppal").html(menu);

    // var footer = 
    //     '<div id="footer-top" class="container" >' +
    //     '<div class="row">' +
    //     '<div class="block col-sm-3">' +
    //     '<a href="./" ><img src="images/maxibienes_antioquia.png" alt="Cozy Logo" /></a>' +
    //     '<br><br>' +
    //     '<p id="parrafo-f3"> </p>' +
    //     '</div>' +
    //     '<div class="block col-sm-3">' +
    //     '<h3>Informaci&oacute;n de contacto</h3>' +
    //     '<ul class="footer-contacts">' +
    //     '<li><a href="#" class="celular-a0" target="_blank" id="celular0">  </a></li>' +
    //     '<li><i class="fa fa-envelope"></i> <a href="#" class="correo-a0" id="correo0"> </a></li>' +
    //     '<div class="d-flex iconos-redes-sociales">'+
    //     '<li><a id="facebook0" target="_blank" href="https://www.facebook.com/arrendamientosmaxibienes"><i class="fa fa-facebook icono-header" style="color: #3b5998;"></i></a></li>'+
    //     '<li><a id="twitter0" target="_blank" href="https://twitter.com/Maxibienes1"><i class="fa fa-twitter icono-header" style="color:#0084b4"></i></a></li>'+
    //     '<li><a id="youtube0" target="_blank" href="https://www.youtube.com/user/maxibienes"><i class="fa fa-youtube icono-header" style="color: #c4302b"></i></a></li>'+
    //     '<li><a id="instagram0" target="_blank" href="https://www.instagram.com/maxibienes/"><i class="fa fa-instagram icono-header" style="color: #8a3ab9;"></i></a></li>'+
    //     '<li><a id="whatsapp0" target="_blank" href="https://wa.me/573014075020"><i class="fa fa-whatsapp icono-header" style="color:#075e54"></i></a></li>'+
    //     '</div>'+
    //     '</ul>' +  
    //     '</div>'+
    //     '<div class="block col-sm-3">' +
    //     '<h3>Nuestras sedes</h3>' +
    //     '<ul class="footer-links">' +
    //     '<li><a href="nuestra-sedes.php#tab1">San Juan</a></li>' +
    //     '<li><a href="nuestra-sedes.php#tab2">Colores</a></li>' +
    //     '<li><a href="nuestra-sedes.php#tab3">Bel&eacute;n</a></li>' +
    //     '<li><a href="nuestra-sedes.php#tab4">Centro</a></li>' +
    //     '<li><a href="nuestra-sedes.php#tab5">Sur</a></li>' +
    //     '</ul>' +
    //     '</div>' +
    //     '<div class="block col-sm-3">' +
    //     '<h3>Links de interés</h3>' +
    //     '<ul class="footer-listings">' +
    //     '<li>' +
    //     '<i class="fa fa-user-secret"></i> <a href="images/Aviso_de_Privacidad.pdf" target="_blank"> Aviso de Privacidad</a></li>' +
    //     '</li>' +
    //     '<li>' +
    //     '<i class="fa fa-files-o"></i> <a href="images/Politicas_Tratamiento_Datos.pdf" target="_blank"> Manual de políticas web</a></li>' +
    //     '</li>' +
    //     '<li>' +
    //     '<i class="fa fa-check-circle"></i><a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank"> Cláusula de consentimiento web </a></li>' +
    //     '</li>' +
    //     '</ul>' +
    //     '</div>' +
    //     '</div>' +
    //     '</div>' +
    //     '<div id="copyright">' +
    //     '<div class="container">' +
    //     '<div class="row">' +
    //     '<div class="col-sm-12">' +
    //     '&copy; Copyright 2019  <a href="https://www.dexcondigital.com/" target="_blank">Dexcon Digital.</a> Todos los derechos reservados.' +

    //     '</div>' +
    //     '</div>' +
    //     '</div>' +
    //     '</div>';


    // $(".footer-ppal").html(footer);

    var header = '<div class="col-sm-12">' +
        '<ul id="top-info">' +
        '<li><a id="facebook0" target="_blank"><i class="fa fa-facebook icono-header" style="color: #3b5998;"></i></a></li>' +
        '<li><a id="twitter0" target="_blank"><i class="fa fa-twitter icono-header" style="color:#0084b4"></i></a></li>' +
        '<li><a id="youtube0" target="_blank"><i class="fa fa-youtube icono-header" style="color: #c4302b"></i></a></li>' +
        '<li><a id="instagram0" target="_blank"><i class="fa fa-instagram icono-header" style="color: #8a3ab9;"></i></a></li>' +
        '<li><a id="whatsapp0" target="_blank"><i class="fa fa-whatsapp icono-header" style="color:#075e54"></i></a></li>' +
        '</ul>' +
        '<ul id="top-buttons">' +
        '<li><a href="#" class="celular-a0" target="_blank" id="celular-header0">  </a></li>' +
        '<li><a href="#" class="correo-a0" target="_blank" id="correo-header0"> </a></li>' +
        //'<li><img src="'+URL_LOCAL+'images/logopagosPSE.png" onclick="openModal()"></li>' +
        '<li><a href="https://www.zonapagos.com/t_maxibienesbd/pagos.asp" target ="_blanck"><img src="'+URL_LOCAL+'images/logopagosPSE.png"></a></li>' +
        '</ul>' +
        '</div>';

    $(".header-ppal").html(header);



})(jQuery);



$(document).ready(function () {
    $('body').on('click', '#items_en_uso li', function () {
        console.log($(this).attr('id'));
        if ($(this).attr('id') == 'items3') {
            sessionStorage.clear();
        }

    })
});

$.ajax({
    url: ''+URL_LOCAL+'/js/contactJSON.php',
    dataType: "json",
    success: function (data) {
        for (var j in data) {
            $("#celular" + j + "").append("Linea Uníca: <i class='fa fa-phone'></i>" + data[j].celular);
            $("#celular-header" + j + "").append("<i class='fa fa-phone icono-header'></i> Teléfono:  " + data[j].celular);
            $("#correo-header" + j + "").append("<i class='fa fa-envelope icono-header'></i> Correo:  " + data[j].correo);
            $("#correo" + j + "").text(" " + data[j].correo);
            $(".celular-a" + j + "").attr("href", "tel:" + data[j].celular);
            $(".correo-a" + j + "").attr("href", "mailto:" + data[j].correo);
        }

    },
    error: function (data) {
    }
});




$.ajax({
    url: ''+URL_LOCAL+'/js/infoJSON.php',
    dataType: "json",
    success: function (data) {
        for (var j in data) {
            if (data[j].zona == 2) {
                $("#parrafo-f" + j + "").append(data[j].contenido);
            }
        }
    },
    error: function (data) {
        alert('Disculpe, existió un problema');
    }
});



function openModal() {
    $("body").append('<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Pagos en Línea</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row text-center">' +
        '<div class="col-sm-2 col-sm-offset-1">' +
        '<a id="pse0" class="pse01" target="_blank">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">' +
        'San Juan' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="pse0" class="pse01" target="_blank">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">Colores' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="pse0" class="pse01" target="_blank">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">Belen' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="pse0" class="pse01" target="_blank">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">Centro' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a  id="segpse0" class="segpse0" target="_blank">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Sur">Sur' +
        '</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');
    psepagos();

    $("#myModal").modal('show');
}

function openModalHome() {
    $("body").append('<div class="modal fade" id="myModalHome" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Pagos en Línea</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row text-center">                       ' +
        '<div class="col-sm-2 col-sm-offset-1">' +
        '<a id="pse0" class="pse01"  target="_blank" onclick="psepagos();">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">' +
        'San Juan' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="pse0" class="pse01" target="_blank" onclick="psepagos();">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">Colores' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="pse0" class="pse01" target="_blank" onclick="psepagos();">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">Belen' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="pse0" class="pse01"  target="_blank" onclick="psepagos();">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Medellín">Centro' +
        '</a>' +
        '</div>' +
        '<div class="col-sm-2 ">' +
        '<a id="segpse0" class="segpse0" target="_blank" onclick="psepagos();">' +
        '<img  class="img-responsive" src="'+URL_LOCAL+'images/Icono2.png" alt="Pagos en Linea Sur">Sur' +
        '</a>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    psepagos();

    $("#myModalHome").modal('show');
}

function openModalformulario() {
    $("body").append('<div class="modal fade" id="myModalFormulario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Formularios</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row">                       ' +
        '<div class="col-sm-6 ">' +
        '<h3 class="mt-4 mb-4">Descargar Formularios</h3>' +
        '<p><a href="'+URL_LOCAL+'images/Persona Natural FGI.pdf" download target="_blank" id="a-pop">Persona Natural FGI</a></p>' +
        '<p><a href="'+URL_LOCAL+'images/Persona Juridica FGI.pdf" download target="_blank" id="a-pop">Persona Jurídica FGI </a></p>' +
        '<p><a href="'+URL_LOCAL+'images/Formato-Solicitud-Fianza-de-arrendamiento.pdf" download target="_blank" id="a-pop">Formulario Fianzacrédito</a></p>' +
        '</div>' +
        '<div class="col-sm-6 ">' +
        '<h3 class="mt-4 mb-4">Enviar Formulario</h3>' +
        '<form action="js/maildocumento.php"  method="POST" enctype="multipart/form-data">' +
        '<input type="text" name="nombre" placeholder="Nombre Completo" class="form-mio required fromName" />' +
        '<input type="email" name="email" placeholder="Correo electrónico" class="form-mio required fromEmail" />' +
        '<select class="form-mio documento" name="doc">'+
        '<option value="0">Documento</option>'+
        '<option value="3">Persona Natural FGI</option>'+
        '<option value="4">Persona Jurídica FGI</option>'+
        '<option value="5">Formulario Fianzacrédito</option>'+
        '</select>'+
        '<div class="checkbox">' +
        '<label>' +
        '<input type="checkbox" name="terms"> Confirmo que he leído, entendido y acepto el <a href="'+URL_LOCAL+'images/Politicas_Tratamiento_Datos.pdf"' +
        'target="_blank">Manual de políticas Web</a>, <a href="'+URL_LOCAL+'images/Aviso_de_Privacidad.pdf" target="_blank">Aviso de Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de consentimiento web </a>' +
        '</label>' +
        '</div>' +
        '<div class="center">' +
        '<button type="submit" class="btn btn-default-color btn-lg submit_form"><i class="fa fa-envelope"></i> Enviar' +
        ' Mensaje</button>' +
        '</div>' +
        '</form>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    $("#myModalFormulario").modal('show');
}

function openModalprop() {
    $("body").append('<div class="modal fade" id="myModalprop" tabindex="-1" style="z-index: 140;" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Al ingresar al portal como propietario usted podrá:</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row">' +
        '<ul>'+
        '    <li><a href="'+URL_LOCAL+'/propietarios" class="amodal-arrendar">Solicitar la terminación del contrato de arrendamiento vigente (Ley 820 de 2003).</a></li>'+
        '    <li><a href="'+URL_LOCAL+'/propietarios" class="amodal-arrendar">Estado de cuenta mensual.</a></li>'+
        '    <li><a href="'+URL_LOCAL+'/propietarios" class="amodal-arrendar">Solicitar certificado de ingresos.</a></li>'+
        '    <li><a href="'+URL_LOCAL+'/propietarios" class="amodal-arrendar">Solicitar certificado para la declaración de renta.</a></li>'+
        '    <li><a href="http://clientes.maxibienes.com/Default.aspx" target="_blank" class="amodal-arrendar">Autorizar el mantenimiento y/o reparación de su propiedad.</a></li>'+
        '</ul>'+
        '<p>Evitando desplazamientos y desde la comodidad de su hogar, podrá hacerle el seguimiento correspondiente a la solicitud realizada.</p>'+
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    $("#myModalprop").modal('show');
}

function openModalarrendar() {
    $("body").append('<div class="modal fade" id="myModalarrendar" style="z-index: 140;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Al ingresar al portal como arrendatario usted podrá:</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row">' +
        '<ul>'+
        '    <li><a href="'+URL_LOCAL+'arrendatarios" class="amodal-arrendar">Mantenimiento y reparación de su inmueble arrendado.</a></li>'+
        '    <li><a href="'+URL_LOCAL+'arrendatarios" class="amodal-arrendar">Solicitar la terminación de su contrato de arrendamiento (Ley 820 de 2003).</a></li>'+
        '    <li><a href="'+URL_LOCAL+'arrendatarios"  class="amodal-arrendar">Descargar de factura de pago de su arrendamiento.</a></li>'+
        '</ul>'+
        '<p>Evitando desplazamientos y desde la comodidad de su hogar, podrá hacerle el seguimiento correspondiente a la solicitud realizada.</p>'+
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    $("#myModalarrendar").modal('show');
}

function openModalformArrendar() {
    $("body").append('<div class="modal fade" id="myModalformArrendar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Solicitar la terminación de su contrato de arrendamiento:</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row">' +
        '<form action="js/mailterminacion.php"  method="POST" enctype="multipart/form-data">' +
        '<input type="text" name="nombre" placeholder="Nombre Completo" class="form-mio required fromName" />' +
        '<input type="text" name="telefono" placeholder="Teléfono" class="form-mio required fromName" />' +
        '<input type="text" name="cedula" placeholder="Número de Cédula" class="form-mio required fromName" />' +
        '<input type="email" name="email" placeholder="Correo electrónico" class="form-mio required fromEmail" />' +
        ' <textarea class="form-control" name="texto" id="text-area" rows="3" placeholder="Escriba su solicitud."></textarea>'+
        '<label>Envie Carta de Terminacion del Contrato: (Solo se aceptan pdf)</label>'+
	    '<input type="file" name="archivo" accept="application/pdf" >'+
        '<div class="checkbox">' +
        
        '<label>' +
        '<input type="checkbox" required name="terms"> Confirmo que he leído, entendido y acepto el <a href="'+URL_LOCAL+'images/Politicas_Tratamiento_Datos.pdf"' +
        'target="_blank">Manual de políticas Web</a>, <a href="'+URL_LOCAL+'images/Aviso_de_Privacidad.pdf" target="_blank">Aviso de Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de consentimiento web </a>' +
        '</label>' +
        '</div>' +
        '<div class="center">' +
        '<button type="submit" class="btn btn-default-color btn-lg submit_form"><i class="fa fa-envelope"></i> Enviar' +
        ' Mensaje</button>' +
        '</div>' +
        '</form>' +
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    $("#myModalformArrendar").modal('show');
}

function openModalmantenimiente() {
    $("body").append('<div class="modal fade" id="myModalmantenimiente" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">' +
        '<div class="modal-dialog" role="document">' +
        '<div class="modal-content">' +
        '<div class="modal-header">' +
        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>' +
        '<h4 class="modal-title" id="myModalLabel">Mantenimiento y reparación de su inmueble arrendado</h4>' +
        '</div>' +
        '<div class="modal-body">' +
        '<div class="row">' +
        '<form action="js/mailMantenimiento.php" method="POST" enctype="multipart/form-data">' +
        '<input type="text" name="nombre" placeholder="Nombre Completo" class="form-mio required fromName" />' +
        '<input type="text" name="telefono" placeholder="Teléfono" class="form-mio required fromName" />' +
        '<input type="email" name="email" placeholder="Correo electrónico" class="form-mio required fromEmail" />' +
        ' <textarea class="form-control" id="text-area" rows="3" placeholder="Escriba su solicitud."></textarea>'+
        '<div class="checkbox">' +
        
        '<label>' +
        '<input type="checkbox" required name="terms"> Confirmo que he leído, entendido y acepto el <a href="'+URL_LOCAL+'images/Politicas_Tratamiento_Datos.pdf"' +
        'target="_blank">Manual de políticas Web</a>, <a href="'+URL_LOCAL+'images/Aviso_de_Privacidad.pdf" target="_blank">Aviso de Privacidad</a> y la <a href="images/Consentimiento_Tratamiento_Datos.pdf" target="_blank">Cláusula de consentimiento web </a>' +
        '</label>' +
        '</div>' +
        '<div class="center">' +
        '<button type="submit" class="btn btn-default-color btn-lg submit_form"><i class="fa fa-envelope"></i> Enviar' +
        ' Mensaje</button>' +
        '</div>' +
        '</div>' +
        '<div class="modal-footer">' +
        '<button type="button" class="btn btn-default" data-dismiss="modal" onclick="redirect()">Cerrar</button>' +
        '</div>' +
        '</div>' +
        '</div>' +
        '</div>');

    $("#myModalmantenimiente").modal('show');
}


$.ajax({
    url: ''+URL_LOCAL+'js/linkJSON.php',
    dataType: "json",
    success: function (data) {
        $("#facebook0").attr("href", data[0].facebook);
        $("#instagram0").attr("href", data[0].instagram);
        $("#youtube0").attr("href", data[0].youtube);
        $("#whatsapp0").attr("href", "https://wa.me/57" + data[0].whatsapp);
        $("#twitter0").attr("href", data[0].twitter);
    },
    error: function (data) {

    }
});

function psepagos() {

    $.ajax({
        url: ''+URL_LOCAL+'/js/linkJSON.php',
        dataType: "json",
        success: function (data) {
            $(".pse01").attr("href", data[0].pse);
            $(".segpse0").attr("href", data[0].segpse);

        },
        error: function (data) {

        }
    });
}

