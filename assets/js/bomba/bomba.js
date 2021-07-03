var tablaBomba;
$(function () {

  tablaBomba = $('#tbl_bomba').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrBomba/getBomba",
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

  $("#agregarBomba").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("Bombaersonal"));
    $.ajax({
      url: baseurl+"CtrPersonal/Bombaersonal",
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
