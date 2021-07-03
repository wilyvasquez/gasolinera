$.extend( $.fn.dataTable.defaults, {
    'responsive'  : true,
    'paging'      : true,
    'info'        : true,
    'filter'      : true,
    'stateSave'   : true,
    'ordering'    : false,
    "language": {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sInfo":           "Registros del _START_ al _END_  (_TOTAL_ registros)",
        "sInfoFiltered":   "",
        "zeroRecords": "No se encontraron datos",
        "infoEmpty": "No se encontraron datos",
        "search": "Buscar",
      "paginate": {
        "first":      "Primero",
        "last":       "Ultimo",
        "next":       "Siguiente",
        "previous":   "Anterior"
    	},
    }
} );

$('.select2').select2()

$('[data-mask]').inputmask()
