var tabla;

function init() {
	mostrarform(false);
	listar();

	$("#formulario").on("submit", function (e) {
		guardaryeditar(e);
	});

	//Cargamos los datos del usuario
	$.post(base_url+"/ajax/pedidos.php?op=selectUsuario", function (r) {
		$("#idusuario").html(r);
		$('#idusuario').selectpicker('refresh');

	});
	//Cargamos los datos del usuario
	$.post(base_url+"/ajax/pedidos.php?op=selectEstado", function (r) {
		$("#idestadopedido").html(r);
		$('#idestadopedido').selectpicker('refresh');

	});

	$('#mFechas').addClass("treeview active");
	$('#lFechas').addClass("active");

}

function limpiar() {

	$("#idpedido").val("");
	$("#idusuario").val("");
	$("#fechapedido").val("");
	$("#idpedido").val("");
	$("#MonedaPedido").val("");

}

function mostrarform(flag) {
	limpiar();
	if (flag) {
		$("#listadoregistros").hide();
		$("#formularioregistros").show();
		$("#btnGuardar").prop("disabled", false);
	} else {
		$("#listadoregistros").show();
		$("#formularioregistros").hide();
		$("#btnagregar").show();

	}
}

function cancelarform() {
	limpiar();
	mostrarform(false);

}

function listar() {
	tabla = $('#tblFechas').dataTable({
		"aProcessing": true,
		"aServerSide": true,
		dom: 'Bfrtip',
		buttons: [
			'copyHtml5',
			'excelHtml5',
			'csvHtml5',
			'pdf'
		],
		"ajax": {
			url: base_url+'/ajax/fechas.php?op=listar',
			type: "get",
			dataType: "json",
			error: function (e) {
				console.log(e.responseText);
			}
		},
		"language": {
			"lengthMenu": "Mostrar : _MENU_ registros",
			"buttons": {
				"copyTitle": "Tabla Copiada",
				"copySuccess": {
					_: '%d líneas copiadas',
					1: '1 línea copiada'
				}
			}
		},
		"bDestroy": true,
		"iDisplayLenght": 5,
		"order": [
			[0, "desc"]
		]

	}).DataTable();
}
// Te olvidaste poner el parametro
function guardaryeditar(e) {

	e.preventDefault();
	$("#btnGuardar").prop("disabled", true);
	var formData = new FormData($("#formulario")[0]);

	$.ajax({
		url: base_url+"/ajax/pedidos.php?op=guardaryeditar",
		type: "POST",
		data: formData,
		contentType: false,
		processData: false,
		success: function (datos) {
			bootbox.alert(datos);
			mostrarform(false);
			tabla.ajax.reload();
		}
	});
	limpiar();
}

function mostrar(idpedido, cliente) {
	$.post(base_url+"/ajax/pedidos.php?op=mostrar", {
		idpedido: idpedido,
		cliente: cliente
	}, function (data, status) {
		data = JSON.parse(data);
		mostrarform(true);
		console.log(data.fechapedido);

		$("#idpedido").val(data.idpedido);
		$("#idusuario").val(data.idusuario);
		$('#idusuario').selectpicker('refresh');
		$("#fechapedido").val(data.fechapedido);
		$("#tipodepago").val(data.tipodepago);
		$("#recojoen").val(data.recojoen);
		$("#total").val(data.total);
		$("#idestadopedido").val(data.idestadopedido);
		$('#idestadopedido').selectpicker('refresh');
		$("#MonedaPedido").val(data.MonedaPedido);
		 ;
	})
	/* $.post(base_url+"/ajax/pedidos.php?op=mostrardetallepedido&id=" + idpedido + "&idcliente=" + cliente, function (r) {
		$("#detalles").html(r);
	}); */
}

function desactivar(idpedido) {
	bootbox.confirm("¿Está Seguro de desactivar el pedido?", function (result) {
		if (result) {
			$.post(base_url+"/ajax/pedidos.php?op=desactivar", {
				idpedido: idpedido
			}, function (e) {
				bootbox.alert(e);
				tabla.ajax.reload();
			});
		}
	})
}

function activar(idpedido) {
	bootbox.confirm("¿Está Seguro de activar el pedido?", function (result) {
		if (result) {
			$.post(base_url+"/ajax/pedidos.php?op=activar", {
				idpedido: idpedido
			}, function (e) {
				bootbox.alert(e);
				tabla.ajax.reload();
			});
		}
	})
}

init();



/* 
fetch('/ajax/fechas.php?op=listar')
  .then(response => response.text())
  .then(data => {
    // Aquí procesamos los datos obtenidos
    console.log(data);
  })
  .catch(error => {
    // Aquí manejamos los errores
    console.error(error);
  }); */
