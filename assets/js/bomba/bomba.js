var tablaBomba;
var tablaDispensador;
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
          return '<a href="'+baseurl+'bomba/perfil/'+row.id+'" class="btn btn-block btn-primary btn-xs">Perfil</a>'
        }
      }
    ]
  });

  par = {
    "id_bomba" : document.getElementById("id_bomba").value
  }
  tablaDispensador = $('#tbl_dispensador').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrBomba/getDispensador",
      "type":"POST",    
      "data": par,         
    },
    'columns': [
      {data: 'dispensador'},
      {data: 'tipo'},
      {data: 'inicial'},
      {data: 'final'},
      {data: 'litros'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="#" onclick="getDatosDispensador(\''+row.id+'\',\''+row.inicial+'\',\''+row.final+'\')" class="btn btn-block btn-primary btn-xs">Editar</a>'
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

  $("#agregarDispensador").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarDispensador"));
    $.ajax({
      url: baseurl+"CtrBomba/agregarDispensador",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaDispensador.ajax.reload();
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

  editarDispensador =  function(inicial,final,id_dispensador,id_bomba){

    $('#mfinal').val(final)
    $('#minicial').val(inicial)
    $('#id_dispensador').val(id_dispensador)
    $('#id_bomba').val(id_bomba)
    $('#editarDispensador').modal('show')
  }

  getDatosDispensador =  function(id,inicial,final){

    $('#mfinal').val(final)
    $('#minicial').val(inicial)
    $('#id_dispensador').val(id)
    $('#id_bomba').val(id_bomba)
    $('#editarDispensador').modal('show')
  }

  getDatosBomba = function(){
    par = {
      "bomba" : document.getElementById("bomba").value
    }
    $.ajax({
      url: baseurl+"CtrBomba/getDatosBomba",
      type: "post",
      dataType: "html",
      data: par,
    }).done(function(response){
      $("#tablaLectura").html(response);
    });
  }

  $("#actualizarDispensador").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("actualizarDispensador"));
    $.ajax({
      url: baseurl+"CtrBomba/actualizarDispensador",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaDispensador.ajax.reload();
      $("#tablaLectura").html(response);
    });
  });

});
