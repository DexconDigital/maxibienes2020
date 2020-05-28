function enviar() {
    var email = $("#email").val();
    var nombre = $("#nombre").val();
    var telefono = $("#telefono").val();
    var mensaje = $("#mensaje").val();
    var asunto = $("#asunto").val();
    $.ajax({
        url: "js/mail.php",
        type: "POST",
        data: {
            email: email,
            nombre: nombre,
            telefono: telefono,
            asunto: asunto,
            mensaje: mensaje
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
                redirect();
            }, 3000);
              
             function redirect(){
		   location.reload();
	   }

            }
        }
    });
    return false;
}
