var tablaProveedor;
$(function () {

  tablaProveedor = $('#tbl_proveedor').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrProveedor/getProveedor",
      "type":"POST",            
    },
    'columns': [
      {data: 'nombre'},
      {data: 'telefono'},
      {data: 'rfc'},
      {data: 'curp'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="'+baseurl+'proveedor/perfil" class="btn btn-block btn-primary btn-xs">Perfil</a>'
        }
      }
    ]
  });

  $("#agregarProveedor").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarProveedor"));
    $.ajax({
      url: baseurl+"CtrProveedor/agregarProveedor",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaProveedor.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_cliente").html(json.msg);
      setTimeout(function(){ 
        $("#msg_cliente").html("");
      },1000);
    });
  });

});
