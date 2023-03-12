

/*
post
idusuario       = id_usuario
month           = 
year            = 
program         = 
fec             = 
total_input     = 
idusuario       = 
tipodepago      = 
*/

/* 
$idusuario      = ''; 
$tipodepago     = ''; 
$recojoen       = '';
$total          = '';
$pagacon        = '';
$idstore        = '';
$subtotal       = '';
$delivery       = '';
$razonsocial    = '';
$ruc            = '';
$direccion      = '';
$vuelto         = '';


$idusuario
$tipodepago
// $recojoen ="PedidoOnline"
$total
// $pagacon = "0.00"
// "321314"
// $subtotal = "0.00"
// $delivery= "0.00"
// $razonsoc = "-"
// $ruc = "-"
// $direccion = "-"
// $vuelto = "0.00"



Nombre

idpedido        = ''; predefinido       Id pedido autoincremental llave primaria así que no tocar
codigopedido    = ''; consultar ===>>   ¿Que es esto?
idusuario       = '';                   Id usuario autoincremental llave primaria así que no tocar
fechapedido     = ''; consultar ===>>   ¿Como se introduce este dato?
idestadopedido  = ''; consultar ===>>   ¿Como se introduce este dato?
tipodepago      = '';                   Paypal
recojoen        = ''; predefinido       Online
total           = '';                   Monto a colocar
pagacon         = ''; predefinido       00
idstore         = ''; predefinido       ¿Que dato se introduce aquí?
subtotal        = ''; consultar ===>>   ¿Que dato se introduce aquí?
delivery        = ''; predefinido       00
razonsocial     = ''; predefinido       -
ruc             = ''; predefinido       -
direccion       = ''; predefinido       - 
vuelto          = ''; predefinido       00



¿Donde pongo el código de transacción?
¿Como pongo la fecha?
¿Como pongo el estado?
¿Como calculo el subtotal?


Nombre

idpedido        = ''; predefinido
codigopedido    = ''; consultar
idusuario       = '';
fechapedido     = ''; consultar
idestadopedido  = ''; consultar
tipodepago      = '';
recojoen        = ''; predefinido
total           = '';
pagacon         = ''; predefinido
idstore         = ''; predefinido
subtotal        = ''; consultar
delivery        = ''; predefinido
razonsocial     = ''; predefinido
ruc             = ''; predefinido
direccion       = ''; predefinido
vuelto          = ''; predefinido




Datos que se quieren insertar:
Monto total

"PayerID":              "STL55NE9DP7WG",
"st":                   "Completed",
"tx":                   "9B430698A5284970T",
"cc":                   "USD",
"amt":                  "3400.00",
"payer_email":          "sb-icxuk25239425@personal.example.com",
"payer_id":             "STL55NE9DP7WG",
"payer_status":         "VERIFIED",
"first_name":           "John",
"last_name":            "Doe",
"txn_id":               "9B430698A5284970T",
"mc_currency":          "USD",
"mc_fee":               "183.90",
"mc_gross":             "3400.00",
"protection_eligibility":"ELIGIBLE",
"payment_fee":          "183.90",
"payment_gross":        "3400.00",
"payment_status":       "Completed",
"payment_type":         "instant",
"handling_amount":      "0.00",
"shipping":             "0.00",
"item_name":            "Chosen plan",
"item_number":          "1",
"quantity":             "1",
"txn_type":             "web_accept",
"payment_date":         "2023-03-11T21:05:36Z",
"receiver_id":          "CSM34YLES8J5L",
"notify_version":       "UNVERSIONED",
"verify_sign":          "A4VOTGE2dU6lFSrYw7ffgLedDyEwAnrraYRKkJOTHE-bFMWp1VF8FA-i"

*/



function confirmOrderDos()
{
    /* var month  = document.querySelector("#month").value;
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

    /* let formData = new FormData();
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
        input1.value = data_to_fill.email_business;
        form.appendChild(input1);
        
        const input2 = document.createElement('input');
        input2.type = 'hidden';
        input2.name = 'cmd';
        input2.value = '_xclick';
        form.appendChild(input2);
        
        const input3 = document.createElement('input');
        input3.type = 'text';
        input3.name = 'item_name';
        input3.value = data_to_fill.item_name;
        form.appendChild(input3);
        
        
        const input4 = document.createElement('input');
        input4.type = 'hidden';
        input4.name = 'lc';
        input4.value = data_to_fill.language_lc;
        form.appendChild(input4);
        
        const input5 = document.createElement('input');
        input5.type = 'text';
        input5.name = 'amount';        
        input5.value = data_to_fill.amount;
        form.appendChild(input5);
        
        const input6 = document.createElement('input');
        input6.type = 'hidden';
        input6.name = 'currency_code';
        input6.value = data_to_fill.currency;
        form.appendChild(input6);
        
        const input7 = document.createElement('input');
        input7.type = 'text';
        input7.name = 'quantity';
        input7.value = '1';
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
        input10.value = data_to_fill.image_url;
        form.appendChild(input10);
        
        const input11 = document.createElement('input');
        input11.type = 'hidden';
        input11.name = 'return';
        input11.value = data_to_fill.success_return;
        form.appendChild(input11);
        
        const input12 = document.createElement('input');
        input12.type = 'hidden';
        input12.name = 'cancel_return';
        input12.value = data_to_fill.cancel_return;
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

        /* dniusuarioa = $("#dniusuarioa").val();
        claveusuarioa = $("#claveusuarioa").val();
        idtienda = $("#idtienda").val(); */
    
        $.post(base_url+"/confirmacion_fun.php?op=loginUser", {
                "email_login": email_login,
                "password_login": password_login
            },
            function (data) {
                // console.log(data); return;
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

        
	 

