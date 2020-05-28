setTimeout(function () {
    $.ajax({
        url: URL_LOCAL+'js/noticesJSON.php',
        dataType: "json",
        success: function (data) {
            console.log('si');
            var result = "";
            var j = 0;
            for (var indice in data) {
                result += '<div class="item col-sm-4" data-animation-direction="from-bottom" data-animation-delay="250">' +
                    '							<div class="image">' +
                    '								<a href="detalle-noticia.php?codigo=' + data[j].id + '">' +
                    '									<span class="btn btn-default"><i class="fa fa-file-o"></i>Ver Más</span>' +
                    '								</a>' +
                    '								<img  src="http://arrendamientosantioquia.com/maxibienes-noticias/admin/' + data[j].imagen + '" alt="Apartamentos en arriendo medellin." />' +
                    '							</div>' +
                    '							<div class="tag"><i class="fa fa-file-text"></i></div>' +
                    '							<div class="info-blog">' +
                    '								<ul class="top-info">' +
                    '									<li><i class="fa fa-calendar"></i>' + data[j].fecha + '</li>' +
                    '								</ul>' +
                    '								<h3>' +
                    '									<a href="detalle-noticia.php?codigo=' + data[j].id + '">' + data[j].titulo + '</a>' +
                    '								</h3>' +
                    '								<p>' + data[j].descripcion + '</p>' +
                    '							</div>' +
                    '						</div>';

                j++;
                if (j > 3) {
                    break;
                }
            }


            $("#ulti-noticias").append(result);


        },
        error: function (data) {
            console.log('no');
        }
    });
});

setTimeout(function () {
    $.ajax({
        url: 'js/noticesJSON.php',
        dataType: "json",
        success: function (data) {
            var result = "";
            for (var j in data) {
                result += '<div class="item col-sm-6" data-animation-direction="from-bottom" data-animation-delay="250">' +
                    '							<div class="image">' +
                    '								<a href="detalle-noticia.php?codigo=' + data[j].id + '">' +
                    '									<span class="btn btn-default"><i class="fa fa-file-o"></i>Ver Más</span>' +
                    '								</a>' +
                    '								<img  src="http://biinyu.com.co/maxibienes/maxibienes-noticias/admin/' + data[j].imagen + '" alt="" />' +
                    '							</div>' +
                    '							<div class="tag"><i class="fa fa-file-text"></i></div>' +
                    '							<div class="info-blog">' +
                    '								<ul class="top-info">' +
                    '									<li><i class="fa fa-calendar"></i>' + data[j].fecha + '</li>' +
                    '								</ul>' +
                    '								<h3>' +
                    '									<a href="detalle-noticia.php?codigo=' + data[j].id + '">' + data[j].titulo + '</a>' +
                    '								</h3>' +
                    '								<p>' + data[j].descripcion + '</p>' +
                    '							</div>' +
                    '						</div>';


            }
            $("#notices-info").append(result);


        },
        error: function (data) {
        }
    });
});



