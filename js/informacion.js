setTimeout(function () {
    $.ajax({
        url: ''+URL_LOCAL+'js/infoJSON.php',
        dataType: "json",
        success: function (data) {
            console.log(data)
            var result = "";
            for (var j in data) {
               if(data[j].zona==1){
                   
                $("#info" + j + "").append(
                   '<h2 class="section-highlight" data-animation-direction="from-left" data-animation-delay="50">'+data[j].titulo+'</h2>'+
                   '<p class="darker-text" data-animation-direction="from-left" data-animation-delay="250">'+data[j].contenido+'</p>'+
                   '<br />');
                   ;
               }
    
            }
    
        },
        error: function (data) {
        }
    });
});

setTimeout(function () {
    $.ajax({
        url: ''+URL_LOCAL+'js/infoJSON.php',
        dataType: "json",
        success: function (data) {
            console.log(data)
            var result = "";
            for (var j in data) {
               if(data[j].zona==3){
                   
                $("#valores" + j + "").append(
                   '<h3>'+data[j].titulo+'</h3>'+
                   '<p >'+data[j].contenido+'</p>'+
                   '<br />');
                   ;
               }
    
            }
    
        },
        error: function (data) {
        }
    });
});


