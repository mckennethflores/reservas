function save_order_in_database()
{
    var formData = new FormData();
    formData.append('idusuario', get.idusuario);
    formData.append('total_input', get.amount);
    formData.append('tipodepago', 'Paypal');

    fetch(base_url+"/../confirmacion_fun.php?op=listarproductostemporales", {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        //alert("Mensaje: " + data);        
    })
    .catch(error => console.error(error));
}

save_order_in_database();



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




/* 

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


document.body.appendChild(form);

form.submit(); */




/* function guardaryeditar() {
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
        // Android.showToast('Se confirmo el pedido con exito'); 
    },
    error: function () {
        console.log("A ocurrido un error");
    },
    });
} */


