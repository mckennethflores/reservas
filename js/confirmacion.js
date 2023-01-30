 
window.addEventListener('load', function() {
    document.querySelector("#btnConfirmPurcharse").disabled = true;
	fntValidEmail(); 
 
}, false);


function fntValidEmail(){
	let validEmail = document.querySelectorAll(".validEmail");
    validEmail.forEach(function(validEmail) {
        validEmail.addEventListener('keyup', function(){
			let inputValue = this.value;
			if(!fntEmailValidate(inputValue)){
				/* this.classList.add('is-invalid'); */
                document.querySelector("#btnConfirmPurcharse").disabled = true;
			}else{
				/* this.classList.remove('is-invalid'); */
                
                document.querySelector("#btnConfirmPurcharse").disabled = false;
			}				
		});
	});
}
function fntEmailValidate(email){
    var stringEmail = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})$/);
    if (stringEmail.test(email) == false){
        return false;
    }else{
        return true;
    }
}

function confirmOrder(){

    // valido si el usuario existe
    /* if user existe le digo que ingrese su contraseña
    */
    var email_input  = document.querySelector("#email_input").value;

    //console.log(email_input); return;

    var formData = new FormData($("#formulario")[0]);
    $.ajax({
        url: base_url+"/confirmacion_fun.php?op=validateEmail&email_input="+email_input,
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {},
        success: function (data) {
            var objeto = JSON.parse(data);
            if(objeto.idusuario != null || objeto.idusuario != ''){
                console.log("Bienvenido de nuevo "+objeto.nomusuario);
                
                document.querySelector("#email_login").value = objeto.emailusuario;
                $("#modal-login").modal('show');
            }
        
        },
        error: function () {
        console.log("A ocurrido un error");
        },
    });

    //si no existe
    /*
    Que ingrese su celular, nombre
    le paso para que seleccione el metodo de pago
    */
}


function confirmOrderDos(){

    var month  = document.querySelector("#month").value;
    var year  = document.querySelector("#year").value;
    var program  = document.querySelector("#program").value;
    var fec  = document.querySelector("#fec").value;
    var total_input  = document.querySelector("#total_input").value;
    var idusuario  = document.querySelector("#idusuario").value;


    let methodPay = $('input[name="methodPay"]:checked').val();
   // console.log(methodPay);

    document.querySelector("#tipodepago").value = methodPay;
    var tipodepago = document.querySelector("#tipodepago").value;


     guardaryeditar();
   $(location).attr("href", "transferencia-bank.php");
}

    function guardaryeditar() {
        var formData = new FormData($("#formulario")[0]);
        $.ajax({
        url: base_url+"/confirmacion_fun.php?op=listarproductostemporales",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        beforeSend: function () {
            console.log("enviando producto...");
        },
        success: function (data) {
            console.log("Mensaje: " + data);
            /* Android.showToast('Se confirmo el pedido con exito'); */
        },
        error: function () {
            console.log("A ocurrido un error");
        },
        });
    }

  
let btnLoginUser = document.querySelector("#btnLoginUser");
   
        btnLoginUser.addEventListener('click', function(){
			
            var email_login  = document.querySelector("#email_login").value;
            var password_login  = document.querySelector("#password_login").value;

           /*  dniusuarioa = $("#dniusuarioa").val();
            claveusuarioa = $("#claveusuarioa").val();
            idtienda = $("#idtienda").val(); */
        
            $.post(base_url+"/confirmacion_fun.php?op=loginUser", {
                    "email_login": email_login,
                    "password_login": password_login
                },
                function (data) {
                    
                   //console.log(data); 
                   var objeto = JSON.parse(data);
                   if(objeto.message == 'success' && objeto.success == '1'){

                  /*   para acceder a los valores de un array es necesario utilizar corchetes */
                  //  console.log(objeto.login[0].idusuario); return;
                      alert("Bienvenido usuario");
                      $("#modal-login").modal('hide');

                      document.querySelector("#idusuario").value = objeto.login[0].idusuario;
                       
                      $('#divContainerDatosDelUsuario').addClass("hidden");
                      $('#botnConfirmarCompra').addClass("hidden");
                      $('#divContainerMetodoDePago').removeClass("hidden");
                      $('#botnConfirmarCompraDos').removeClass("hidden");
                   }else if (objeto.message == 'error' && objeto.success == '0'){
                    alert("Usuario o contraseña incorrecto, porfavor vuelva a ingresar");
                   }else{
                    alert("El sistema no responde, vuelva a ingresar en unos segundos...");
                   }
                   /* if(objeto.idusuario != null || objeto.idusuario != ''){
                       console.log("Bienvenido de nuevo "+objeto.nomusuario);
                       
                       document.querySelector("#email_login").value = objeto.emailusuario;
                       $("#modal-login").modal('show');
                   } */
                });

		});

        
	 

