
$.ajax({
    url: ''+URL_LOCAL+'js/infoimgJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            if (data[j].zona == 2) {
                result += '<div class="feature col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">' +
                    '<img src="'+URL_LOCAL+'maxibienes-admin/admin/' + data[j].imagen + '" alt="Agencias Inmobiliarias en Medellin" class="img-zona-int">' +
                    '<h1>' + data[j].titulo + '</h1>' +
                    '<p>' + data[j].contenido + '</p>' +
                    '</div>';
            }

        }
        $("#servicios").append(result);
    },
    error: function (data) {
    }
});


$.ajax({
    url: ''+URL_LOCAL+'js/infoimgJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            if (data[j].zona == 1) {
                $("#link" + j + "").attr("href", URL_LOCAL+data[j].link);
                $("#img-zona" + j + "").attr("src", URL_LOCAL+"maxibienes-admin/admin/"+data[j].imagen);
                $("#titulo" + j + "").append(data[j].titulo);
            }

        }
    },
    error: function (data) {
        alert('Disculpe, existi√≥ un problema');
    }
});

$.ajax({
    url: ''+URL_LOCAL+'js/infoimgJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            if (data[j].zona == 1 && j>8) {
                result += '<div class="feature col-md-4" data-animation-direction="from-bottom" data-animation-delay="250">';
                if (data[j].link == "") {
                    result += '<a href="#"><img src="'+URL_LOCAL+'maxibienes-admin/admin/' + data[j].imagen + '" class="img-zona-int"></a>' +
                        '<a href="#">' +
                        '<h3>' + data[j].titulo + '</h3>';
                }
                else {
                    result += '<a href="' + URL_LOCAL + data[j].link + '"><img src="'+URL_LOCAL+'maxibienes-admin/admin/' + data[j].imagen + '" class="img-zona-int"></a>' +
                        '<a href="' + data[j].link + '">' +
                        '<h3>' + data[j].titulo + '</h3>';
                }

                result += '</a>' +
                    '</div>';
                
            }

        }
        $("#z-interactiva").append(result);
    },
    error: function (data) {
        alert('Disculpe, existi√≥ un problema');
    }
});

$.ajax({
    url: ''+URL_LOCAL+'js/infoimgJSON.php',
    dataType: "json",
    success: function (data) {
        var result = "";
        for (var j in data) {
            if (data[j].zona == 3) {
                result += '<div class="col-md-6 mt-4" data-animation-direction="from-bottom" style="text-align: center;" data-animation-delay="250">';
                if (data[j].link == "") {
                    result += '<a><img src="'+URL_LOCAL+'maxibienes-admin/admin/' + data[j].imagen + '" onclick="openModal()" class="img-zona-int"></a>' +
                        '<a href="#">' +
                        '<h3>' + data[j].titulo + '</h3>';
                }
                else {
                    result += '<a href="'+ data[j].link + '" target="_blanck"><img src="'+URL_LOCAL+'maxibienes-admin/admin/' + data[j].imagen + '" class="img-zona-int"></a>' +
                        '<a href="'+ data[j].link + '" target="_blanck" >' +
                        '<h3>' + data[j].titulo + '</h3>';
                }

                result += '</a>' +
                    '</div>';
                
            }

        }
        $("#zona-pagos").append(result);
    },
    error: function (data) {
        alert('Disculpe, existi®Æ un problema');
    }
});