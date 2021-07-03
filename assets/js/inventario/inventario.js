var tablaInventario;
$(function () {

  tablaInventario = $('#tbl_inventario').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrInventario/getInventario",
      "type":"POST",            
    },
    'columns': [
      {data: 'articulo'},
      {data: 'cantidad'},
      {data: 'costo'},
      {data: 'descripcion'},
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
      url: baseurl+"CtrInventario/agregarInventario",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaInventario.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_inventario").html(json.msg);
      setTimeout(function(){ 
        $("#msg_inventario").html("");
      },1000);
    });
  });

});
