var tablaTurno;
$(function () {

  tablaTurno = $('#tbl_turno').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrTurno/getTurno",
      "type":"POST",            
    },
    'columns': [
      {data: 'turno'},
      {data: 'inicio'},
      {data: 'final'},
      {data: 'alta'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="'+baseurl+'bomba/perfil" class="btn btn-block btn-primary btn-xs">Editar</a>'
        }
      }
    ]
  });

  $("#agregarTurno").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarTurno"));
    $.ajax({
      url: baseurl+"CtrTurno/agregarTurno",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaTurno.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_turno").html(json.msg);
      setTimeout(function(){ 
        $("#msg_turno").html("");
      },1000);
    });
  });

});