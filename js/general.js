function getIdInput(idinput) {
    document.querySelector(idinput).value;
}

function goBack() {
    window.history.back();
}

function getIdValue(variable, tipodedato) {
    if (tipodedato = 'parse_float') {
        return parseFloat(document.getElementById('input' + variable).value);

    } else {
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
function incrementar(variable) {
    var cantidad = 1;
    inputid = getIdValue(variable, 'parse_float');
    /* Capturo el monto de las habitaciones para mostrarlo */
    var rescantporpre  = document.querySelector("#resCantPorPre"+variable).value;
    console.log(rescantporpre);
   /*  document.querySelector(".priceReservation").innerHTML = rescantporpre; */

    if (inputid >= 6) {
        showMessage('.incrementar', variable, true, 'Solo se permiten elegir hasta 6 habitaciones');
        return;
    }
    cantidad = inputid + 1;
    $('.decrementar' + variable).prop('disabled', false);
    document.getElementById('input' + variable).value = cantidad;
    document.getElementById('cantidad_input').value = cantidad;



   // sumar();
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

function decrementar(variable) {
    var cantidad = 1;
    inputid = getIdValue(variable, 'parse_float');
    if (inputid == 0) {
        showMessage('.decrementar', variable, true, 'Como minimo puede elegir 1 habitaciones');
        return;
    }
    cantidad = inputid - 1;
    $('.incrementar' + variable).prop('disabled', false);
    document.getElementById('input' + variable).value = cantidad;
    document.getElementById('cantidad_input').value = cantidad;
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