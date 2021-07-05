var tablaCliente;
var tablaAbono;
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
      {data: 'curp'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="'+baseurl+'cliente/perfil" class="btn btn-block btn-primary btn-xs">Perfil</a>'
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

  $("#agregarCompra").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarCompra"));
    $.ajax({
      url: baseurl+"CtrCliente/agregarCompra",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaAbono.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_abono").html(json.msg);
      setTimeout(function(){ 
        $("#msg_abono").html("");
      },1000);
    });
  });

  tablaAbono = $('#tbl_abono').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrCliente/getAbonos",
      "type":"POST",            
    },
    'columns': [
      {data: 'tipo'},
      {data: 'costo'},
      {data: 'descripcion'},
      {data: 'alta'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="#" class="btn btn-block btn-primary btn-xs">Editar</a>'
        }
      }
    ]
  });

});
