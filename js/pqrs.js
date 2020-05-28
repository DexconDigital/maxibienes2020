function enviarpqrs() {
    var apellido = $("#apellido").val();
    var nombre = $("#nombre").val();
    var email = $("#email").val();
    var telefono = $("#telefono").val();
    var celular = $("#celular").val();
    var mensaje = $("#mensaje").val();
    var asunto = $("#asunto option:selected").val();
    var sede=$("#sede option:selected").val();
    $.ajax({
        url: "js/mailpqrs.php",
        type: "POST",
        data: {
            email: email,
            apellido: apellido,
            nombre: nombre,
            telefono: telefono,
            celular: celular,
            asunto: asunto,
            mensaje: mensaje, 
            sede: sede
        },
        dataType: "html",
        success: function (data) {
             console.log(data)
            console.log("sending...");
            var x = Math.random();
            if (data == 1) {
               alert("Mensaje enviado");
                setTimeout(() => {
                console.log(1)
               
            }, 3000);
              
  
            }
        }
    });
    return false;
}