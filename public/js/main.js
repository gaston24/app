function filtrar() {
	var input, filter, table, tr, td, td2, i, txtValue;
	input = document.getElementById('textBox');
	filter = input.value.toUpperCase();
	table = document.getElementById("table");
	tr = table.getElementsByTagName('tr');
	

	for (i = 0; i < tr.length; i++) {
		visible = false;
		/* Obtenemos todas las celdas de la fila, no sólo la primera */
		td = tr[i].getElementsByTagName("td");

		for (j = 0; j < td.length; j++) {
			if (td[j] && td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
				visible = true;
			}
		}
		if (visible === true) {
			tr[i].style.display = "";
		} else {
			tr[i].style.display = "none";
		}
	}
}





function editar(id, csrf){

	$.ajax({
		url: 'usuarios/'+id,
		method: 'GET',
		dataType: "JSON",
		data: {
			id: id
		},
		success: function(data) {

			alerta(data['ID'], data['NOMBRE'], data['PASS'], data['PERMISOS'], data['DSN'], data['DESCRIPCION'], data['COD_CLIENT'], data['NRO_SUCURS'], 
			data['COD_VENDED'], data['TANGO'], data['COD_DEPOSI'], data['TIPO']);

		}
	});
			
	
}



function alerta(id, nombre, pass, permisos, dsn, descripcion, codClient, nroSucurs, codVended, tango, codDeposi, tipo, csrf)
{
	const { value: formValues } = Swal.fire({
		title: 'Detalle del usuario',
		showCancelButton: true,
		html:
		'<div class="row"> <div class="col-6 text-left">Nombre		</div>	<input id="swal-input1" class="form-control form-control-sm mt-1 col-6" value="'+nombre+'		"> </div>' +
		'<div class="row"> <div class="col-6 text-left">Pass			</div>	<input id="swal-input2" class="form-control form-control-sm mt-1 col-6" value="'+pass+'			"> </div>' +
		'<div class="row"> <div class="col-6 text-left">DSN			</div>	<input id="swal-input3" class="form-control form-control-sm mt-1 col-6" value="'+dsn+'			"> </div>' +
		'<div class="row"> <div class="col-6 text-left">Descripcion	</div>	<input id="swal-input4" class="form-control form-control-sm mt-1 col-6" value="'+descripcion+'	"> </div>' +
		'<div class="row"> <div class="col-6 text-left">Cod Cliente	</div>	<input id="swal-input5" class="form-control form-control-sm mt-1 col-6" value="'+codClient+'	"> </div>' +
		'<div class="row"> <div class="col-6 text-left">Nro Sucursal	</div>	<input id="swal-input6" class="form-control form-control-sm mt-1 col-6" value="'+nroSucurs+'	"> </div>'+
		'<div class="row"> <div class="col-6 text-left">Cod Vendedor	</div>	<input id="swal-input7" class="form-control form-control-sm mt-1 col-6" value="'+codVended+'	"> </div>'+
		'<div class="row"> <div class="col-6 text-left">Tango			</div>	<input id="swal-input8" class="form-control form-control-sm mt-1 col-6" value="'+tango+'		"> </div>'+
		`<div class="row"> <div class="col-6 text-left">Tipo			</div>	
		<select id="swal-input9" class="form-control form-control-sm mt-1 col-6">
		<option value="REVISAR"		${tipo=="REVISAR"? "selected":""		}>REVISAR</option>
		<option value="ECOMMERCE"	${tipo=="ECOMMERCE"? "selected":""		}>ECOMMERCE</option>
		<option value="FRANQUICIA"	${tipo=="FRANQUICIA"? "selected":""		}>FRANQUICIA</option>
		<option value="GRUPO"		${tipo=="GRUPO"? "selected":""			}>GRUPO</option>
		<option value="INACTIVO"	${tipo=="INACTIVO"? "selected":""		}>INACTIVO</option>
		<option value="LOCAL_PROPIO"${tipo=="LOCAL_PROPIO"? "selected":""	}>LOCAL_PROPIO</option>
		<option value="MAYORISTA"	${tipo=="MAYORISTA"? "selected":""		}>MAYORISTA</option>
		<option value="VENDEDOR"	${tipo=="VENDEDOR"? "selected":""		}>VENDEDOR</option>
		</select></div>`,
		focusConfirm: false,
		preConfirm: () => {
		
		
		// console.log(
		// 	"estoy en el js todavia:", 
		// 	document.getElementById('swal-input1').value,
		// 	document.getElementById('swal-input2').value,
		// 	document.getElementById('swal-input3').value,
		// 	document.getElementById('swal-input4').value,
		// 	document.getElementById('swal-input5').value,
		// 	document.getElementById('swal-input6').value,
		// 	document.getElementById('swal-input7').value,
		// 	document.getElementById('swal-input8').value,
		// 	document.getElementById('swal-input9').value
		// )

		var id_actua =			id;
		var nombre_actua =		document.getElementById('swal-input1').value;
		var pass_actua =		document.getElementById('swal-input2').value;
		var dsn_actua =			document.getElementById('swal-input3').value;
		var descripcion_actua =	document.getElementById('swal-input4').value;
		var codClient_actua =	document.getElementById('swal-input5').value;
		var nroSucurs_actua =	document.getElementById('swal-input6').value;
		var codVended_actua =	document.getElementById('swal-input7').value;
		var tango_actua =		document.getElementById('swal-input8').value;
		var tipo_actua =		document.getElementById('swal-input9').value;

		// console.log("todavia estoy acaaa:", id_actua, nombre_actua, pass_actua, dsn_actua, descripcion_actua, codClient_actua, nroSucurs_actua, codVended_actua, tango_actua, tipo_actua);

		actualizar(id_actua, nombre_actua, pass_actua, dsn_actua, descripcion_actua, codClient_actua, nroSucurs_actua, codVended_actua, tango_actua, tipo_actua, csrf);



		
		}
	})
	
	if (formValues) {
		Swal.fire(JSON.stringify(formValues))
	}

}


function actualizar(id_actua, nombre_actua, pass_actua, dsn_actua, descripcion_actua, codClient_actua, nroSucurs_actua, codVended_actua, tango_actua, tipo_actua, csrf){
	// console.log("ya paseeeee:", id_actua, nombre_actua, pass_actua, dsn_actua, descripcion_actua, codClient_actua, nroSucurs_actua, codVended_actua, tango_actua, tipo_actua);
	console.log(csrf);

		$.ajax({
		url: 'usuariosActua/'+id_actua,
		method: 'POST',
		dataType: "JSON",
		data: {
			_token: csrf,
			id: id_actua, 
			nombre: nombre_actua, 
			pass: pass_actua, 
			dsn: dsn_actua, 
			descripcion: descripcion_actua, 
			codClient: codClient_actua, 
			nroSucurs: nroSucurs_actua, 
			codVended: codVended_actua, 
			tango: tango_actua, 
			tipo: tipo_actua
		},
		success: function(data) {
			console.log(data)
		}
	});
}