var tablaGasolina;
$(function () {

  tablaGasolina = $('#tbl_gasolina').DataTable({
    'processing': true,
    'serverSide':true,
    'ajax': {
      "url":baseurl+"CtrGasolina/getGasolina",
      "type":"POST",            
    },
    'columns': [
      {data: 'gasolina'},
      {data: 'precio'},
      {data: 'numero'},
      {data: 'alta'},
      {"orderable": true,
        render:function(data, type, row){
          return '<a href="'+baseurl+'bomba/perfil" class="btn btn-block btn-primary btn-xs">Editar</a>'
        }
      }
    ]
  });

  $("#agregarGasolina").on("submit", function(e){
    e.preventDefault();
    var formData = new FormData(document.getElementById("agregarGasolina"));
    $.ajax({
      url: baseurl+"CtrGasolina/agregarGasolina",
      type: "post",
      dataType: "html",
      data: formData,
      cache: false,
      contentType: false,
      processData: false
    }).done(function(response){
      tablaGasolina.ajax.reload();
      var json = $.parseJSON(response);
      $("#msg_gasolina").html(json.msg);
      setTimeout(function(){ 
        $("#msg_gasolina").html("");
      },1000);
    });
  });

});