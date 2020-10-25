<style type="text/css">

 .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
}

  </style>


    <section class="content-header">

      <h1>
        Tablero
        <small>Disponibilidades</small>
        <i class='fa  fa-exclamation-circle' id="helper" onClick="desplegar()"></i>
      </h1>
<div  id="desplegable" class="pop-ups">
 

 


 <div class="box">
    <div class="box-header with-border">
       <i class='fa fa-remove' id="helper" onClick="ocultar()"></i>
    </div>

    <div class="box-body">

        <p style="color:green;">Choferes en verde: </p><p> Son choferes que se encuentran disponibles para recibir viajes pendientes.</p>

        <p style="color:yellow;">Choferes en amarillo: </p><p> Son choferes que se encuentran con un viaje en curso.</p>

        <p style="color:red;">Choferes en rojo: </p><p> Son choferes que no se encuentran disponibles, o ausentes.</p>

        <button type='button' class='btn btn-warning btn-circle'>
          <i class='fa fa-hand-paper-o'></i>
        </button> Es una opcion solo disponible para los choferes que estan con un viaje en curso. Nos permite indicar que el chofer finalizo el viaje que tenia en curso, lo que implica que vuelve a estar disponible (en color verde).

<br><br>

        <button type='button' class='btn btn-danger btn-circle'>
          <i class='fa fa-check'></i>
        </button> Es una opcion solo disponible para los choferes ausentes. Nos permite activarlos, loq ue implica que pasan a estar activos (en color verde).

<br><br>

        <button type='button' class='btn btn-light' style='color:black';>
          <span>12 viajes
            <i class='fa fa-arrow-circle-right'></i>
          </span>
        </button> Este boton lo encontraremos en cada chofer. Nos permite desplagar el listado de viajes pendientes, para poder seleccionarlos y asignarselos al chofer al que corresponde el boton accionado.

    </div>

  </div>



</div>
    </section>

    <!-- Main content -->
<div>
    <section class="content">
     



<?php

   include('listartablero.php');
var_dump( session_get("permisos"));

 ?>

  <div class="control-sidebar-bg"></div>
</section>
</div>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="height:600px;width:800px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Listado de viajes</h4>
      </div>
<section class="content">  
            <div class="row">
                <div class="col-xs-3">
                    Chofer: <input type="text"  class="form-control" name="idchofer" id="idchofer" value="">
                </div>
            </div>
            <div class="row">
              <div class="modal-body" style="overflow-y: scroll;height:390px;width:800px; ">
                <table  class="table table-bordered table-striped">
                              <thead>

                        <tr>
                          <th><input type="checkbox"></th>
                          <th>Id</th>
                          <th>Fecha</th>
                          <th>Hora</th>
                          <th>Comision Paga</th>
                          <th>Valor Viaje</th>
                          <th>Servicio</th>
                          <th>Chofer</th>
                          <th>Cliente</th>
                          <th>kms</th>
                          <th>Fecha Asignado</th>
                          <th>Estado</th>
                        </tr>
                        </thead>
                        <tbody>

                          <?php
                       

                            include('listarviajespendientes.php');


                          ?>

                        </tbody>
                       
                    </table>
                </div>
            </div>
</section>

      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary pull-right" data-dismiss="modal" onclick="asignar()">Asignar</button>
      </div>
    </div>
  </div>
</div>



  <script language="Javascript">


      $(".pop-ups").hide();

       function desplegar() {
          $(".pop-ups").show();
        }
        function ocultar() {
          $(".pop-ups").hide();
        }


var cho=0;

    function hola(numero) {

        cho=numero;
        $("#idchofer").val(numero);

     
      };

      function asignar(){

          var valoresCheck="";
          var cont=0;

          $("input[type=checkbox]:checked").each(function(){
              
              if (cont>0) {
                valoresCheck+=" , ";
              }
              valoresCheck+=this.value;
              cont++;
          });


          var url = "asignar.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"ids": valoresCheck,"chofer": cho}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                    enviaje(cho);
                     location.reload();             
                   },
                   error: function(data)             
                   {
                    enviaje(cho);
                     location.reload();            
                   }
                 });

}

  function llego(chofer){

    var url = "llego.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"chofer": chofer}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     
                     location.reload();            
                   }
                 });

                var user = document.getElementsByName("usuario");
                alert(user);


  }   

    function enviaje(chofer){

    var url = "enviaje.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"chofer": chofer}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     location.reload();            
                   }
                 });

                var user = document.getElementsByName("usuario");
                alert(user);


  }       

  function activar(chofer){

    var url = "activar.php";
                $.ajax({                                       
                   url: url,                     
                   data:{"chofer": chofer}, 
                   method : 'post',
                   dataType : 'json',
                   success: function(data)             
                   {
                     location.reload();             
                   },
                   error: function(data)             
                   {
                     location.reload();            
                   }
                 });

   }  

</script>