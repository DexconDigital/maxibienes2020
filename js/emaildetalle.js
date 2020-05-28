function enviardetalle(){

      var name = $("input#name").val();
      var name_envia = $("input#name_envia").val();
      var email = $("input#email").val();
      var url_inm = window.location.href;
      var message = $("textarea#message").val();
     
      if(name.length > 0 && name_envia.length > 0 && email.length > 0 && message.length > 0){
      $.ajax({
        url: "js/maildetalle.php",
        type: "POST",
        data: {
          name: name,
          name_envia: name_envia,
          url_inm: url_inm,
          email: email,
          message: message
        },
        cache: false,
        success: function(data) {
            if(data == 1){
                alert("Mensaje enviado");
            }

          setTimeout(() => {
                console.log(1)
                redirect();
            }, 3000);
              
             function redirect(){
		   location.reload();
	   }
        }
      });
      }else{
          alert("Llene todos los campos por favor");
      }
      
}