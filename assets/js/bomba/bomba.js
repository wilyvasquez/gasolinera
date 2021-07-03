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
      {data: 'bomba'},
      {data: 'dispensadores'},
      {data: 'tipo'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="'+baseurl+'bomba/perfil" class="btn btn-block btn-primary btn-xs">Perfil</a>'
        }
      }
    ]
  });

  $("#agregarBomba").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarBomba"));
    $.ajax({
      url: baseurl+"CtrBomba/agregarBomba",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaBomba.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_bomba").html(json.msg);
      setTimeout(function(){ 
        $("#msg_bomba").html("");
      },1000);
    });
  });

  $('#nuevo_turno').click(function() {
    $('#agregarTurno').modal('show');
  });

});
