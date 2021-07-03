var tablaPersonal;
$(function () {

  tablaPersonal = $('#tbl_personal').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrPersonal/getPersonal",
      "type":"POST",            
    },
    'columns': [
      {data: 'nombre'},
      {data: 'apellidos'},
      {data: 'telefono'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="#" class="btn btn-block btn-primary btn-xs">Ver</a>'
        }
      }
    ]
  });

  $("#agregarPersonal").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarPersonal"));
    $.ajax({
      url: baseurl+"CtrPersonal/agregarPersonal",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaPersonal.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_cliente").html(json.msg);
      setTimeout(function(){ 
        $("#msg_cliente").html("");
      },1000);
    });
  });

});
