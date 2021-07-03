var tablaCliente;
$(function () {

  tablaCliente = $('#tbl_cliente').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrCliente/getClientes",
      "type":"POST",            
    },
    'columns': [
      {data: 'nombre'},
      {data: 'apellidos'},
      {data: 'telefono'},
      {data: 'rfc'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="#" class="btn btn-block btn-primary btn-xs">Ver</a>'
        }
      }
    ]
  });

  $("#agregarCliente").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarCliente"));
    $.ajax({
      url: baseurl+"CtrCliente/agregarCliente",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaCliente.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_cliente").html(json.msg);
      setTimeout(function(){ 
        $("#msg_cliente").html("");
      },1000);
    });
  });

});
