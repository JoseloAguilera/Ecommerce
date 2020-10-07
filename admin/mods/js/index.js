//DataTable
$(document).ready(function() {
	// $('#tabladatos').DataTable( {
	// 	dom: 'Bfrtip',
	// 	order: [[ 0, "asc" ]],
	// 	orientation: 'landscape',
	// 	pageSize: 'LEGAL',
	// 	buttons: [
	// 		'copyHtml5',
	// 		'excelHtml5',
	// 		'pdfHtml5'
	// 	],
	// 	columnDefs: [ {
	// 		targets: 0,
	// 		render: $.fn.dataTable.render.moment( 'DD/MM/YYYY' )
	// 	}],
	// 	language: {
	// 		"decimal": ",",
	// 		"thousands": "."
	// 	}
	// });
	// $('#tabladatos1').DataTable( {
	// 	dom: 'Bfrtip',
	// 	order: [[ 0, "asc" ]],
	// 	orientation: 'landscape',
	// 	pageSize: 'LEGAL',
	// 	pageLength: 5,
	// 	buttons: [
	// 		'copyHtml5',
	// 		'excelHtml5',
	// 		'pdfHtml5'
	// 	],
	// 	language: {
	// 		"decimal": ",",
	// 		"thousands": "."
	// 	}
	// });
	$('#tabladatos2').DataTable( {
		dom: 'Bfrtip',
		order: [[ 1, "desc" ]],
		orientation: 'landscape',
		pageSize: 'LEGAL',
		pageLength: 5,
		buttons: [
			'copyHtml5',
			'excelHtml5',
			'pdfHtml5'
		],
		language: {
			"decimal": ",",
			"thousands": "."
		}
	});
});


<?php if (isset($mensaje)) {?>
$(document).ready(function(){
	$("#modal-mensaje").modal("show");
});
<?php
	unset($mensaje);
} ?>