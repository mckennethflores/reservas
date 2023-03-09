 
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

    let btnRegister = document.querySelector("#btnRegister");
    btnRegister.addEventListener('click', function(){

        var email = gv("email_register");
        var pass = gv("password_register");
        var rpass = gv("rpassword_register");
        var name = gv("name_register");
        var phone = gv("phone_register");
       // console.log(pass,rpass);
        if(pass != rpass){
            alert("Las contraseñas ingresadas no coinciden");
        }
      /*   console.log(name, phone);
        return; */
        registrarUsuario(email,pass,name,phone);
    });

function registrarUsuario(email,pass,name,phone){
  //   console.log(email,pass);

      $.post(base_url+"/confirmacion_fun.php?op=userRegister", {
                    "email_register": email,
                    "password_register": pass,
                    "name_register": name,
                    "phone_register": phone
                },
                function (data) {
                    
                   
                   document.querySelector("#idusuario").value = data;
                   $("#modal-register").modal('hide');

                   $('#divContainerDatosDelUsuario').addClass("hidden");
                   $('#botnConfirmarCompra').addClass("hidden");
                   $('#divContainerMetodoDePago').removeClass("hidden");
                   $('#botnConfirmarCompraDos').removeClass("hidden");



                });

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
                   if(objeto.message == 'success' && objeto.success == '1'){

                  /*   para acceder a los valores de un array es necesario utilizar corchetes */
                  //  console.log(objeto.login[0].idusuario); return;
                  document.querySelector('#titleModal').innerHTML = "Bienvenido nuevamente: "+objeto.login[0].nomusuario;

                  console.log("Bienvenido de nuevo "+objeto.login[0].nomusuario);
               //   alert("Bienvenido de nuevo "+objeto.login[0].nomusuario);
                  
                  document.querySelector("#email_login").value = objeto.login[0].emailusuario;
                  $("#modal-login").modal('show');

                   }else if (objeto.message == 'error' && objeto.success == '0'){

                    $("#modal-register").modal('show');
                   var email_input = document.querySelector("#email_input").value;
                   document.querySelector("#email_register").value = email_input;
                   }else{
                    alert("El sistema no responde, vuelva a ingresar en unos segundos...");
                   }


           /*  var objeto = JSON.parse(data);
            if(objeto.idusuario != null || objeto.idusuario != ''){
                console.log("Bienvenido de nuevo "+objeto.nomusuario);
                
                document.querySelector("#email_login").value = objeto.emailusuario;
                $("#modal-login").modal('show');
            }else{
                console.log(data);
            } */
        
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

/*     var month  = document.querySelector("#month").value;
    var year  = document.querySelector("#year").value;
    var program  = document.querySelector("#program").value;
    var fec  = document.querySelector("#fec").value;
    var total_input  = document.querySelector("#total_input").value; */
    var idusuario  = document.querySelector("#idusuario").value;


    let methodPay = $('input[name="methodPay"]:checked').val();
   // console.log(methodPay);

   if(methodPay == 'Transferencia'){
    //console.log("Seleciono Transferencia");

        document.querySelector("#tipodepago").value = methodPay;
        var tipodepago = document.querySelector("#tipodepago").value;
        guardaryeditar();
        $(location).attr("href", base_url+"/transferencia-bank.php?idusuario="+idusuario);

    //return;
   }else if (methodPay == 'Paypal') {
    console.log("Seleciono Paypal");


    // let mi_formulario = document.getElementById('id_de_mi_formulario');

/*     let formData = new FormData();
        formData.append('email_usuario', 'hola@gmail.com');
        formData.append('monto', '500');
        formData.append('currency', 'PEN');
        formData.append('logo', 'http://images/logo.png');
        formData.append('pagina_de_respuesta', 'http://response_paypal.php');
        formData.append('token_de_autenticacion', 'dfas4dd65fa1s6ddfa51sd6fda5s1d6as5d1f');



        fetch('buy_now_button/borrador/borrador_recepcion_de_post.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            window.location.href = './buy_now_button/borrador/borrador_recepcion_de_post.php';
        })
        .catch(error => {
            console.error(error);
        }); */

        const form = document.createElement('form');
        form.method = 'POST';
        form.action = 'https://www.sandbox.paypal.com/cgi-bin/webscr';
        form.id = 'form_pay';
        
        const input1 = document.createElement('input');
        input1.type = 'hidden';
        input1.name = 'business';
        input1.value = 'sb-wxcaf25239092@business.example.com';
        form.appendChild(input1);
        
        const input2 = document.createElement('input');
        input2.type = 'hidden';
        input2.name = 'cmd';
        input2.value = '_xclick';
        form.appendChild(input2);
        
        const input3 = document.createElement('input');
        input3.type = 'text';
        input3.name = 'item_name';
        input3.value = 'Lampara de escritorio';
        form.appendChild(input3);
        
        
        const input4 = document.createElement('input');
        input4.type = 'hidden';
        input4.name = 'lc';
        input4.value = 'es_ES';
        form.appendChild(input4);
        
        const input5 = document.createElement('input');
        input5.type = 'text';
        input5.name = 'amount';
        input5.value = '13.00';
        form.appendChild(input5);
        
        const input6 = document.createElement('input');
        input6.type = 'hidden';
        input6.name = 'currency_code';
        input6.value = 'EUR';
        form.appendChild(input6);
        
        const input7 = document.createElement('input');
        input7.type = 'text';
        input7.name = 'quantity';
        input7.value = '2';
        form.appendChild(input7);
        
        const input8 = document.createElement('input');
        input8.type = 'hidden';
        input8.name = 'item_number';
        input8.value = '1';
        form.appendChild(input8);
        
        const input9 = document.createElement('input');
        input9.type = 'hidden';
        input9.name = 'no_shipping';
        input9.value = '1';
        form.appendChild(input9);
        
        const input10 = document.createElement('input');
        input10.type = 'hidden';
        input10.name = 'image_url';
        input10.value = 'https://picsum.photos/150/150';
        form.appendChild(input10);
        
        const input11 = document.createElement('input');
        input11.type = 'hidden';
        input11.name = 'return';
        input11.value = './buy_now_button/receptor.php';
        form.appendChild(input11);
        
        const input12 = document.createElement('input');
        input12.type = 'hidden';
        input12.name = 'cancel_return';
        input12.value = './buy_now_button/pago_cancelado.php';
        form.appendChild(input12);
        
        /* const input13 = document.createElement('input');
        input13.type = 'hidden';
        input13.name = 'currency_code';
        input13.value = 'EUR';
        form.appendChild(input13); */
        
        document.body.appendChild(form);
        
        form.submit();
        //window.location.href = 'https://example.com/pagina-de-destino';

    
    // Paypal Method

    //Descargar libreria
    // Importar libreria
    // Total venta, idcliente, nombre, email.
    // Paypal (v,cl,no);
    // paypal request = 200 ? "pedido generado exitosamente": "error";
    // guardar datos en la base de datos.



    return;
   }


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
            alert("Mensaje: " + data);
            /* Android.showToast('Se confirmo el pedido con exito'); */
        },
        error: function () {
            console.log("A ocurrido un error");
        },
        });
    }

  function closeModal(value){
     $("#modal-"+value).modal('hide');
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
                    
              //     console.log(data); return;
                   var objeto = JSON.parse(data);
                   if(objeto.message == 'success' && objeto.success == '1'){

                  /*   para acceder a los valores de un array es necesario utilizar corchetes */
                  //  console.log(objeto.login[0].idusuario); return;
                      alert("Bienvenido usuario");
                   //   console.log("Bienvenido de nuevo "+objeto.login[0].nomusuario);
                    //  document.querySelector('#titleModal').innerHTML = "Bienvenido "+objeto.login[0].nomusuario;
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

        
	 

