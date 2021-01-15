function filtrar() {
	var input, filter, table, tr, td, td2, i, txtValue;
	input = document.getElementById('textBox');
	filter = input.value.toUpperCase();
	table = document.getElementById("tablaEquis");
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



function cambiar(nComp){
    console.log(nComp);

    $.ajax({
		url: 'equis/actualizar',
		method: 'GET',
		dataType: "JSON",
		data: {
			nComp: nComp
		},
		success: function(data) {

            console.log(data);
			
		}
	});
}


$(document).ready( function () {
    var table = $('#dataTabla').DataTable({
      dom: "B",
      buttons: [
        { extend: 'excel', className: 'btn btn-info btn-sm' }
        ],
      initComplete: function() {
        $('table.dataTable').hide();
      }
      } );
  } );

