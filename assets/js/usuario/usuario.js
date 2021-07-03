var tablaUsuario;
$(function () {

  tablaUsuario = $('#tbl_usuario').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
        "url":baseurl+"CtrUsuario/getUsuarios",
        "type":"POST",            
      },
      'columns': [
        {data: 'nombre'},
        {data: 'apellidos'},
        {data: 'telefono'},
        {data: 'usuario'},
        {data: 'permiso'},
        {"orderable": true,
          render:function(data, type, row){
            return '<a href="#" class="btn btn-block btn-primary btn-xs">Ver</a>'
          }
        }
      ]
  });

  $("#agregarUsuarios").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarUsuarios"));
    $.ajax({
      url: baseurl+"CtrUsuario/agregarUsuarios",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaUsuario.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_usuario").html(json.msg);
      setTimeout(function(){ 
        $("#msg_usuario").html("");
      },1000);
    });
  });

});
