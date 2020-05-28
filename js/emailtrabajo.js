function enviartrabajo() {
    var email = $("#email").val();
    var nombre = $("#nombre").val();
    var apellido =$("#apellido").val();
    var edad= $("#edad").val();
    var direccion =$("#direccion").val();
    var barrio =$("#barrio").val();
    var celular = $("#celular").val();
    var descripcion = $("#descripcion").val();
    var tiempo =$("#tiempo").val();
    var experiencia=$("#experiencia").val();
    var archivo =$("#archivo").val()
    $.ajax({
        url: "js/mailtrabajo.php",
        type: "POST",
        data: {
            email: email,
            nombre: nombre,
            celular: celular,
            apellido: apellido, 
            edad: edad,
            direccion: direccion,
            barrio: barrio,
            descripcion: descripcion,
            tiempo: tiempo,
            experiencia: experiencia,
            archivo: archivo
        },
        dataType: "html",
        success: function (data) {
             console.log(data)
            console.log("sending...");
            var x = Math.random();
            if (data == 1) {
               alert("Mensaje enviado");

            }
        }
    });
    return false;
}