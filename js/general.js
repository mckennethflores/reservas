function getIdInput(idinput) {
    document.querySelector(idinput).value;
}

function goBack() {
    window.history.back();
}

function getIdValue(variable, tipodedato) {
    if (tipodedato = 'parse_float') {
        return parseFloat(document.getElementById('input' + variable).value);

    } else if (tipodedato = 'parse_int'){
        return parseInt(document.getElementById('input' + variable).value);
    }else{
        return document.getElementById('input' + variable).value;
    }

}
/* Valida si un input esta vacio */
function isEmpty(str) {
    return (!str || 0 === str.length);
}

function showMessage(clase, variable, estado, mensaje) {
    $(clase + variable).prop('disabled', estado);

    alert(mensaje);
   // Android.showToast(mensaje);
  console.log(mensaje);
}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 

Funcion para incrementar y decrementar el item del producto 
alerta: esta funcion utiliza la funcion de getIdValue() y la funcion showMessage

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  */
function incrementar(variable,cabdisponi) {

    var  inputid = getIdValue(variable, 'parse_float');
    var cantidad = 1;
/*   var  inputid = getIdValue(variable, 'parse_float');

    /* Capturo el monto de las habitaciones para mostrarlo */
    var rescantporpre  = document.querySelector("#resCantPorPre"+variable).value;
  //  console.log(inputid,cabdisponi); 
   /*  document.querySelector(".priceReservation").innerHTML = rescantporpre; */

    if (inputid >= cabdisponi) {
      //  showMessage('.incrementar', variable, true, 'No se pueden elegir mas habitaciones');
        return;
    }
    cantidad = inputid + 1;


    var total = cantidad * rescantporpre;
    console.log(total);
    $('.decrementar' + variable).prop('disabled', false);
    document.getElementById('input' + variable).value = cantidad;
    document.getElementById('cantidad_input').value = cantidad;

    document.getElementById('montoTotalCadaHabtacion'+variable).value = total;



    sumar();
}

    function sumar() {
     //   var delivery_input = parseFloat(document.querySelector("#delivery_input").value);
        var subtotal = 0;
        var list = document.querySelectorAll(".precioOcultoCalcularJs");
    
        if (list.length == 0) {
        var message = "No hay habitaciones";
        // quitar para produccion
        //Android.showToast(message);
        console.log(message);
        // deshabilito el boton
        } else {

        var values = [];
        for (var i = 0; i < list.length; ++i) {
            values.push(parseFloat(list[i].value));
        }
        subtotal = values.reduce(function (
            previousValue,
            currentValue,
            index,
            array
        ) {
            return parseFloat(previousValue) + parseFloat(currentValue);
        });
      //  var subtotal_format = subtotal.toFixed(2);
/*         document.querySelector(".subtotal_span").innerHTML = subtotal_format;
        document.querySelector("#subtotal_input").value = subtotal_format; */
    
     //   var total = subtotal;
       // console.log(total);
        var total_format = subtotal.toFixed(2);
        
/*         document.querySelector(".total_span").innerHTML = total_format;
        document.querySelector("#total_input").value = total_format; */
        document.querySelector(".priceReservation").innerHTML = total_format; 
        document.querySelector("#total_input").value = total_format;
        }
    }

function decrementar(variable,cabdisponi) {

    inputid = getIdValue(variable, 'parse_float');
  //  var cantidad = 0;
    var total = 0;
    if (inputid == 0) {
       // document.querySelector("#btnDepResFrm").disabled = true;
      //  showMessage('.decrementar', variable, true, 'Como minimo puede elegir 1 habitaciones');
        return;
    }
    /* Capturo el monto de las habitaciones para mostrarlo */
    var rescantporpre  = parseInt(document.querySelector("#resCantPorPre"+variable).value);

    var totalporitem = parseInt(document.getElementById('montoTotalCadaHabtacion'+variable).value);

 // var cantidad = parseInt(document.getElementById('cantidad_input').value);
var cantidad = parseInt(document.getElementById('input' + variable).value);
    //parseint
    total = totalporitem - rescantporpre;
    console.log(totalporitem, cantidad,rescantporpre); 

    console.log(total); 

    cantidad = inputid - 1;
    $('.incrementar' + variable).prop('disabled', false);
    document.getElementById('input' + variable).value = cantidad;
    document.getElementById('cantidad_input').value = cantidad;

    document.getElementById('montoTotalCadaHabtacion'+variable).value = total;

    sumar();

}
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * 

Funciones de vistas/producto_android.php para abrir nuevos archivos o redirigir

* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *  */
function abrirpagconfirm(value) {
    $(location).attr("href", "confirmarpedido_android.php?idstore=" + value);
}

function openMyAccount_func(value) {
    $(location).attr("href", "my_account_android.php?idstore=" + value);
}

function openSelectStore(value) {
    $(location).attr("href", "select_store_android.php?idstore=" + value);
}

function goSearchFileAndroidFunction(value) {
    $(location).attr("href", "search_android.php?idstore=" + value);
}

function goBackFunction(value) {
    $(location).attr("href", "producto_android.php?idstore=" + value);
}

function goCategoryFileAndroidFunction(value) {
    $(location).attr("href", "linea_android.php?idstore=" + value);
}

function getParamUrl() {
    var parts = window.location.search.substr(1).split("&");
    var $_GET = {};
    for (var i = 0; i < parts.length; i++) {
        var temp = parts[i].split("=");
        $_GET[decodeURIComponent(temp[0])] = decodeURIComponent(temp[1]);
    }
    return $_GET["idstore"];
}

//Obtiene la propiedad value de un elemento
function gv(v){
    var vv  = document.querySelector("#"+v).value;

    return vv.trim();
}

// Funcion que obtiene los parametros url
let getParameterByName = function () {
    let queries = location.search.substring(1).split('&'),
        processed = {};
    for (let query of queries) {
        let [name, value] = query.split('=');
        processed[decodeURIComponent(name)] = value ? decodeURIComponent(value) : '';
    }

    return function (name) {
        if (typeof processed[name] !== 'undefined')
            return processed[name];
        else
            return null;
    };
}();